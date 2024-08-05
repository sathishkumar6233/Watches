<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    nav {
        width: 100%;
        height: 100px;
        line-height: 80px;
        background: #34495e;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav ul {
        width: 40%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }
    ul  li{
        text-decoration: none;
    }

  ul  li a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: 500;
    }
</style>
<?php
$isSubmitted = false;

if (isset($_POST['submit'])) {
    $isSubmitted = true;
}
?>

<body>
    <nav>
        <div class="logo">logo</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <?php if ($isSubmitted): ?>
                <li><a href="#">Logout</a></li>
            <?php else: ?>
                <li><a href="#">Login</a></li>
                <li><a href="#">Logout</a></li>
            <?php endif; ?>
            <li><a href="#">Home</a></li>
        </ul>
        <form action="" method="post">
            <button type="submit" name="submit">submit</button>
        </form>
    </nav>
</body>


</body>

</html>