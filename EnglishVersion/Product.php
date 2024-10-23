<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBar("Product");
    ?>

    <div class="image-container">
        <!-- <div class="product-box">
            <img src="../images/product1/product1.1.png" class="product-img">
            <h2 class="product-title">product 1</h2>
            <span class="price">$10</span>
            <i class='bx bx-shopping-bag add-cart' id="cart-icon"></i>
        </div> -->
        <?php
        imgsInRow();
        ?>
    </div>

</body>

</html>