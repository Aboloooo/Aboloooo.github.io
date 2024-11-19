<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css?<? time(); ?>">
</head>

<body>
    <?php
    include_once("../phpLibrary/MyLibrary.php");
    NavigationBarE("");
    ?>
    <?php
    $accounts = "../DataBases/Client_DataBase.csv";

    //check if all the filleds are filled up
    if (isset($_POST["username"], $_POST["password"])) {
        $usernameInput = $_POST["username"];
        $passwordInput = $_POST["password"];
        $sucessfullLogin = false;    //Flags are really important

        //check if the database exists
        if (file_exists($accounts)) {
            //Read the database line by line and separate the username and pass from eachother using explode function
            $openFile = fopen($accounts, "r");


            while (($line = fgets($openFile)) !== false) {
                list($username, $password) = explode(" => ", $line);
                // check if user has an account already
                if ($username == $usernameInput && $password == $passwordInput) {
                    // print("Login successful!");
                    $sucessfullLogin = true;
                    $_SESSION["user"] = true;
                    if (isset($_POST["submit"])) {
                        header("Location: Home.php");
                    }
                    break;
                };
            };
        }
        if (!$sucessfullLogin) {
            print("Login failled!");
        }
    }

    ?>

    <div>
        <a href="SignUp.php"> Sign up </a>
    </div>

    <div class="login-form">
        <form action="" method="POST">
            <h1>Login</h1>
            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" name="username">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
            <div>

                <a href="#">Forgotten password</a>
                <a href="SignUp.php">Create an account</a>
            </div>
            <input type="submit" id="submit" placeholder="submit" value="Submit" name="submit">

        </form>
    </div>

</body>

</html>