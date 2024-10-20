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
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["submit"])) {
        submitForm();
    }

    function submitForm()
    {
        if (empty($_GET["UserName"])) {
            print("Form cant be submitted.");
        } elseif (empty($_GET["LastName"])) {
            print("Field in submision, Last name filled cant be empty");
        } elseif (empty($_GET["Email"])) {
            print("Field in submision, Email filled cant be empty");
        } else {
            print("Form submitted successfully");
        }
    };

    ?>
    <div class="form-location">
        <div class="container-form">
            <h3>Contact us</h3>
            <form action="" method="GET">
                <input type="text" placeholder="First name" name="UserName">
                <input type="text" placeholder="Last name" name="LastName">
                <input type="email" placeholder="Email" name="Email">

                <a href="#">Forgotten password</a>
                <button type="submit" name="submit">submit</button>
                <!-- <input type="submit" name="submit"> -->
            </form>
        </div>
    </div>


</body>

</html>