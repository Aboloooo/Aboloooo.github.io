<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css? <?= time(); ?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBarF("Product");
    ?>

    <div class="product-heading-img">
        <div>
            <div>
                <img src="../img/backgro.png" alt="" class="background_img">
            </div>
            <div class="h2-1">
                <h2>Un monde de style et de mode</h2>
            </div>
        </div>
        <div>
            <img src="../img/backgro2.png" alt="" class="background_img2">
        </div>
        <div class="h2-2">
            <h2>Découvrez votre meilleur look avec nous ! <br>La qualité n'est pas un hasard ; c'est notre engagement</h2>
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
                    <span class="price"><?= $splitsOfEachLine[3] ?>€</span>
                    <p><?= $splitsOfEachLine[4] ?></p>
                    <p><?= $splitsOfEachLine[5] ?></p>
                    <i class='bx bx-shopping-bag add-cart' id="cart-icon"></i>
                </div>


        <?php
            }
        }
        ?>
    </div>
    <!-- the following function will create a end bar in the end of the content of a webpage -->
    <?php
    EndBarF()
    ?>

</body>

</html>