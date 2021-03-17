<?php
// Use Cart in ShopLayout
require_once('models/cart.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1team Cart</title>

    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/styles/style.css" />
</head>

<body>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="?controller=home&action=welcome">
                <img src="/Image/s1team-re.jpg" alt="" width="50" height="50">
            </a>
            <!-- <a class="navbar-brand" href="?controller=shop&action=index">
                <img src="/Image/s1team-re.jpg" alt="" width="50" height="50">
            </a> -->

            <a href="?controller=shop&action=cartPage" type="button" class="btn btn-warning">Your Cart (<?php echo Cart::countItems() ?>)</a>
        </div>
    </nav>

    <div class="container">
        <?php echo $content ?>
    </div>
</body>

</html>