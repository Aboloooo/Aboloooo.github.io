<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bank of icon  https://boxicons.com/  -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="../style.css? <?= time(); ?>">
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBarE("");
    ?>

    <?php
    $completedProductDetails = false;

    if (isset($_POST["submit"])) {
        $productName = $_POST["productName"];
        $productDescription = $_POST["productDescription"];
        $productPrice = $_POST["productPrice"];
        $productSize = $_POST["productSize"];
        $productGender = $_POST["productGender"];


        // now checking if all the neccesary inputs are filled up
        if (!isset($productName, $productDescription, $productPrice,  $productSize, $productGender, $productImg)) {
            die("Error: One or more product details are missing.");
            $completedProductDetails = false;
        } else {
            $completedProductDetails = true;
        }

        if ($completedProductDetails) {
            // $productName, $productDescription, $productPrice,  $productSize, $productGender, $productImg
            $productBank =  fopen("../DataBases/Products.csv", "a");
            $NewProduct = [$productName, $productDescription, $productPrice,  $productSize, $productGender, $productImg];

            fputcsv($productBank, $NewProduct);
        }
    }
    ?>

    <div class="container-new-product">
        <div class="img-new-product">
            <form action="" method="POST">
                <input type="file" name="productImg">
            </form>
        </div>
        <div class="detail-new-product">
            <form action="" method="POST" class="form">
                <label for="">Product name</label>
                <input type="text" name="productName">

                <label for="">Description</label>
                <input type="text" name="productDescription">

                <label for="">Price</label>
                <input type="number" name="productPrice">

                <label for="">Sizes availible</label>
                <input type="text" name="productSize">

                <label for="">Gender usage</label>
                <input type="text" name="productGender">

                <input type="submit" value="submit" name="submit">
            </form>
        </div>

    </div>


    <!-- the following function will create a end bar in the end of the content of a webpage -->
    <?php
    EndBar()
    ?>

</body>

</html>