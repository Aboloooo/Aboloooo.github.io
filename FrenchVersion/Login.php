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
    NavigationBarF("");
    ?>
    <?php
    $accounts = "../DataBases/Client_DataBase.csv";

    //check if all the filleds are filled up
    if (isset($_POST["username"], $_POST["password"])) {
        $usernameInput = $_POST["username"];
        $passwordInput = $_POST["password"];
        $SucessfulLogin = false;    //Flags are really important

        //check if the database exists
        if (file_exists($accounts)) {
            $OpenedFile = fopen($accounts, "r");
            //Read the database line by line and separate the username and pass from eachother using explode function
            while (($line = fgets($OpenedFile)) !== false) {
                list($username, $password) = explode(" => ", $line);
                // check if user has an account already
                if ($usernameInput == $username && $passwordInput == $password) {
                    print("Sucessful login!");
                    $SucessfulLogin = true;
                    break;
                }
            }
        }

        if (!$SucessfulLogin) {
            print("Login failed! please try again.");
        }
    }
    ?>

    <div>
        <a href="SignUp.php"> s'inscrire </a>
    </div>

    <div class="login-form">
        <form action="" method="POST">
            <h1>Se connecter</h1>
            <label for="username">Username</label>
            <input type="text" placeholder="Email or Phone" name="username">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
            <div>

                <a href="#">Mot de passe oublié</a>
                <a href="SignUp.php">Créer un compte</a>
            </div>

            <input type="submit" id="submit" value="Soumettre">

        </form>
    </div>

</body>

</html>