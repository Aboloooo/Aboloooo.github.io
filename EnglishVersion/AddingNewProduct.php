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

    <div class="container-new-product">
        <div class="img-new-product">
            <input type="file" name="file">
        </div>
        <div class="detail-new-product">
            <form action="" class="form">
                <label for="">Product name</label>
                <input type="text">
                <label for="">Description</label>
                <input type="text">
                <label for="">Price</label>
                <input type="number">
                <label for="">Sizes availible</label>
                <input type="text">
                <label for="">Gender usage</label>
                <input type="text">
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