<?php
session_start();

include_once('./config.php');
if (!isset($_SESSION['user'])) {
	// header('location:login_form.php');
	echo "
<script>window.location.href='./login-system/login_form.php'</script>
  
  ";
	// exit();
} else {
	$userId = $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	include_once('./head.php');
	?>


</head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

<body>
<style>
/* General Table Styling */
.table {
    width: 100%;
    margin-top: 8%;
    margin-bottom: 8%;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

/* Grid Layout */
.table-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    padding: 1rem;
}

/* Additional Styling */
.text-center {
    text-align: center;
}

.btn {
    padding: 8px 12px;
    margin: 5px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
}

.btn-warning {
    background-color: #ffc107;
    border: none;
}

.btn-success {
    background-color: #28a745;
    border: none;
}

.text-white {
    color: white;
}

.w-25 {
    width: 25%;
}

/* Responsive Table */

@media(max-width: 786px) {

.table thead {
	display: none;
}

.table, .table tbody, .table tr, .table td {
	display: block;
	width: 100%;
}

.table tr {
	margin-bottom: 15px;
}

.table td {
	text-align: right;
	padding-left: 50%;
	position: relative;
}

.table td::before {
	content: attr(data-label);
	position: absolute;
	left: 0;
	width: 50%;
	padding-left: 15px;
	font-weight: bold;
	text-align: left;
}

.table td img {
	display: block;
	margin: 0 auto 10px;
}

.btn-group {
	display: flex;
	justify-content: space-between;
}

.btn-group input {
	width: 50px;
}
}

</style>










	<?php
	include_once('./nav.php');
	?>

	<?php
	// Include your database connection file


	$id = isset($_GET['pId']) ? intval($_GET['pId']) : 0;



	// Handle POST requests for update and remove
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['update'])) {
			$cartId = $_POST['id'];
			$qty = $_POST['qty'];
			$price = $_POST['price'];

			// Update query
			$query = "UPDATE addcart SET qty='$qty', price='$price' WHERE id='$cartId'";
			$update = mysqli_query($config, $query);

			if ($update) {
				echo "<script>alert('Cart updated successfully.')</script>";
			} else {
				echo "<script>alert('Failed to update cart.')</script>";
			}
		}

		if (isset($_POST['remove'])) {
			$cartId = $_POST['id'];

			// Sanitize $cartId to prevent SQL injection
			$cartId = mysqli_real_escape_string($config, $cartId);

			// Delete query
			$query = "DELETE FROM addcart WHERE id = '$cartId'";
			if (mysqli_query($config, $query)) {
				echo "<script>alert('Product removed from Database.')</script>";
			} else {
				echo "<script>alert('Product not removed from Database.')</script>";
			}
		}
	}

	// Fetch and display the cart items
	$sqlCart = "SELECT * FROM addcart";

	$cartShow = mysqli_query($config, $sqlCart);
	while ($row = mysqli_fetch_array($cartShow)) {
		$userActId = $row['id'];
	}
	?>


<div class="table-container">
    <table class="table table-striped">
	<!-- <table class="table table-striped" style="margin-top:8%; margin-bottom: 8%;"> -->

		<?php

		if (isset($_SESSION['user'])) {
			$userId = $_SESSION['user'];
			$query = "SELECT * FROM addcart WHERE userId = '$userId'";
		}


		// $sql = "SELECT * FROM addcart";
		$result = mysqli_query($config, $query);

		// Check if the result set is empty
		if (!mysqli_num_rows($result) > 0) {
			echo "<tr><td class='text-center'>Your bucket list is empty</td></tr>";
		} else {
		?>
			<thead >
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Name</th>
					<th scope="col">Image</th>
					<th scope="col">Price</th>
					<th scope="col">QTY</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php
			while ($row = mysqli_fetch_array($result)) {
				$cartId = $row['id'];
				$cartName = $row['name'];
				$cartImage = $row['image'];
				$cartPrice = $row['price'];
				$unitPrice = $cartPrice; // Assume price per unit
			?>
				<tr>
					<td><?php echo $cartId; ?></td>
					<td><?php echo $cartName; ?></td>
					<td>
						<img src="./assets/<?php echo $cartImage; ?>" style="width:40px;" alt="">
					</td>
					<td>
						<h1 id="price-<?php echo $cartId; ?>"><?php echo $cartPrice; ?></h1>
					</td>
					<td>
						<div class="btn-group" role="group" aria-label="Button group with hidden input">
							<button type="button" class="btn btn-primary increment-btn" data-cart-id="<?php echo $cartId; ?>" data-unit-price="<?php echo $unitPrice; ?>">+</button>
							<input type="text" disabled name="qty" class="text-center w-25" value="1" id="quantity-<?php echo $cartId; ?>">
							<button type="button" class="btn btn-danger decrement-btn" data-cart-id="<?php echo $cartId; ?>" data-unit-price="<?php echo $unitPrice; ?>">-</button>
						</div>
					</td>
					<td>
						<form action="" method="POST">
							<input type="hidden" name="id" value="<?php echo $cartId; ?>">
							<input type="hidden" name="price" id="hidden-price-<?php echo $cartId; ?>" value="<?php echo $cartPrice; ?>">
							<input type="hidden" name="qty" id="hidden-qty-<?php echo $cartId; ?>" value="1">
							<button type="submit" name="update" class="btn btn-warning text-white">Update</button>
							<button type="submit" name="remove" class="btn btn-success text-white">Remove</button>
						</form>
					</td>
				</tr>
		<?php
			}
		}
		?>
		</tbody>
	</table>

	
	</div>



	<script>
		document.querySelectorAll('.increment-btn').forEach(button => {
			button.addEventListener('click', function() {
				let cartId = this.getAttribute('data-cart-id');
				let unitPrice = parseFloat(this.getAttribute('data-unit-price'));

				let qtyInput = document.getElementById('quantity-' + cartId);
				let qty = parseInt(qtyInput.value);
				qtyInput.value = qty + 1;

				let hiddenQtyInput = document.getElementById('hidden-qty-' + cartId);
				hiddenQtyInput.value = qty + 1;

				let priceElement = document.getElementById('price-' + cartId);
				let newPrice = unitPrice * (qty + 1);
				priceElement.textContent = newPrice.toFixed(2);

				let hiddenPriceInput = document.getElementById('hidden-price-' + cartId);
				hiddenPriceInput.value = newPrice.toFixed(2);
			});
		});

		document.querySelectorAll('.decrement-btn').forEach(button => {
			button.addEventListener('click', function() {
				let cartId = this.getAttribute('data-cart-id');
				let unitPrice = parseFloat(this.getAttribute('data-unit-price'));

				let qtyInput = document.getElementById('quantity-' + cartId);
				let qty = parseInt(qtyInput.value);
				if (qty > 1) {
					qtyInput.value = qty - 1;

					let hiddenQtyInput = document.getElementById('hidden-qty-' + cartId);
					hiddenQtyInput.value = qty - 1;

					let priceElement = document.getElementById('price-' + cartId);
					let newPrice = unitPrice * (qty - 1);
					priceElement.textContent = newPrice.toFixed(2);

					let hiddenPriceInput = document.getElementById('hidden-price-' + cartId);
					hiddenPriceInput.value = newPrice.toFixed(2);
				}
			});
		});
	</script>



	<?php
	include_once('./footer.php');
	?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>