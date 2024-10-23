<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBar("Contact");
    ?>

    <?php
    if (isset($_GET["submit"])) {
        submitForm();
    }

    function submitForm()
    {
        
        
    };


    ?>
    <div class="form-location">
        <div class="container-form">
            <h3>Contact us</h3>
            <form action="" method="GET">
                <input type="text" placeholder="First name" name="UserName">
                <input type="text" placeholder="Last name" name="LastName">
                <input type="email" placeholder="Email" name="Email">

                <a href="#" class="Forgotten-password">Forgotten password</a>

                <input type="submit" name="submit">
            </form>
            <a href="Contact.php">Reset the form and search</a>
        </div>
    </div>


</body>

</html>