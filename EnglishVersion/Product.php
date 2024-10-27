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

        <?php
        $ProductsDataBase = fopen("../DataBases/Products.csv", "r");
        $line = fgets($ProductsDataBase);
        while (!feof($ProductsDataBase)) {
            $line = fgets($ProductsDataBase);
            $splitsOfEachLine = explode(",", $line);
            // print("<div>.$line.</div>");
            if (count($splitsOfEachLine) <= 7) {
        ?>

                <div class="product-box">
                    <img src="<?= $splitsOfEachLine[7] ?>" class="product-img">
                    <h2 class="product-title"><?= $splitsOfEachLine[1] ?></h2>
                    <span class="price"><?= $splitsOfEachLine[3] ?></span>
                    <p><?= $splitsOfEachLine[5] ?></p>
                    <p><?= $splitsOfEachLine[6] ?></p>
                    <i class='bx bx-shopping-bag add-cart' id="cart-icon"></i>
                </div>
    </div>

<?php
            }
        }
?>

<!-- ../img/Men/6/6.1.PNG -->
</body>

</html>