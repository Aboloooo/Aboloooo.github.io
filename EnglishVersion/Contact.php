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
        // if (isset($_GET["UserName"])) {
        //     if ($_GET["UserName"] == "") {
        //         print("Form cant be submitted.");
        //     }
        // } elseif (isset($_GET["LastName"])) {
        //     if ($_GET["LastName"] == "") {
        //         print("Field in submision, Last name filled cant be empty");
        //     }
        // } elseif (isset($_GET["Email"])) {
        //     if ($_GET["LastName"] == "") {
        //         print("Field in submision, Email filled cant be empty");
        //     }
        // } else {
        //     print("Form submitted successfully");
        // }

        $inputs = array(
            "Key1" => "UserName",
            "Key2" => "LastName",
            "Key3" => "Email"
        );
        foreach ($inputs as $key => $value) {
            if (isset($_GET[$value])) {
                if ($_GET[$value] == "") {
                    print("Please filled up all the inputs! form submission failed");
                    break;
                } else {
                    print("Form submitted successfully!");
                    break;
                }
            }
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

                <a href="#" class="Forgotten-password">Forgotten password</a>

                <input type="submit" name="submit">
            </form>
            <a href="Contact.php">Reset the form and search</a>
        </div>
    </div>


</body>

</html>