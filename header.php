<?php
    require_once('functions.php');
    require_once('database.php');
?>
<!doctype html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="js/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="content">
            <nav class="navbar navbar-light bg-light -sm">
            <ul class="nav">
                <li class="nav-item">
                <a class="navbar-brand" href="index.php">Shop</a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand" href="items.php">Add items</a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand" href="checkout.php">Checkout <?php echo$_SESSION['cart_count'];?></a>
                </li>
            </ul>
            </nav>
<?=sendError();?>

