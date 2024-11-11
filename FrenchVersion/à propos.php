<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css? <?= time(); ?>">
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBarF("à propos");
    ?>

    <!-- the following function will create a end bar in the end of the content of a webpage -->
    <?php
    EndBarF()
    ?>
</body>

</html>