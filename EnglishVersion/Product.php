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

    <?php
    background_img("Product");
    ?>
    <div class="product-heading-img">
        <div>
            <div>
                <img src="../img/backgro.png" alt="" class="background_img">
            </div>
            <div class="h2-1">
                <h2>A World of Style and Fashion</h2>
            </div>
        </div>
        <div>
            <img src="../img/backgro2.png" alt="" class="background_img2">
        </div>
        <div class="h2-2">
            <h2>Discover Your Best Look with Us! <br>Quality is No Accident; It is Our Commitment</h2>
        </div>
    </div>
    <div class="image-container">

        <?php
        $ProductsDataBase = fopen("../DataBases/Products.csv", "r");
        $line = fgets($ProductsDataBase);
        while (!feof($ProductsDataBase)) {
            $line = fgets($ProductsDataBase);
            $splitsOfEachLine = explode(",", $line);
            // print("<div>.$line.</div>");
            if (count($splitsOfEachLine) >= 6) {
                //     print("test");
        ?>
                <div class="product-box">
                    <!-- ID,Name,Description,Price,Size,Gender,img -->
                    <img src="<?= $splitsOfEachLine[6] ?>" class="product-img">
                    <h2 class="product-title"><?= $splitsOfEachLine[1] ?></h2>
                    <span class="price"><?= $splitsOfEachLine[3] ?></span>
                    <p><?= $splitsOfEachLine[4] ?></p>
                    <p><?= $splitsOfEachLine[5] ?></p>
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