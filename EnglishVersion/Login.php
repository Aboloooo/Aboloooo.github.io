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
    NavigationBar("");
    ?>
    <?php
    $accounts = "../DataBases/Client_DataBase.csv";

    if (isset($_POST["username"], $_POST["password"])) {
        $usernameInput = $_POST["username"];
        $passwordInput = $_POST["password"];
        $SucessfulLogin = false;

        if (file_exists($accounts)) {
            $OpenedFile = fopen($accounts, "r");
            while (($line = fgets($OpenedFile)) !== false) {
                list($username, $password) = explode(" => ", $line);

                if ($usernameInput == $username && $passwordInput == $password) {
                    print("Sucessful login!");
                    $SucessfulLogin = true;
                    break;
                }
            }
        } else {
            print("Login failed! please try again.");
        }

        if (!$SucessfulLogin) {
            print("Account not found!");
        }
    }
    ?>

    <div>
        <a href="SignUp.php"> Sign up </a>
    </div>

    <div class="login-form">
        <form action="" method="POST">
            <h1>Login page</h1>
            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" name="username">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
            <div>

                <a href="#">Forgotten password</a>
                <a href="SignUp.php">Create an account</a>
            </div>

            <input type="submit" id="submit" placeholder="submit">

        </form>
    </div>

</body>

</html>