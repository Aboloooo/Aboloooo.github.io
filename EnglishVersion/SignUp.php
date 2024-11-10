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
    NavigationBar("");
    ?>

    <div>
        <a href="Login.php"> Login </a>
    </div>

    <?php
    if (isset($_POST["username"], $_POST["password"], $_POST["passwordConfirmation"])) {
        if ($_POST["password"] == $_POST["passwordConfirmation"]) {
            print("Registration in process, please be patient!");
            $client_DataBase = fopen("../DataBases/Client_DataBase.csv", "a");
            if (filesize("../DataBases/Client_DataBase.csv") === 0) {
                fwrite($client_DataBase, "userName" . " => " . "Password");
            };
            fwrite($client_DataBase, "\n" . $_POST["username"] . " => " . $_POST["password"]);
        } else {
            print("Passwords do not match!");
        }
    }
    ?>

    <div class="login-form">
        <form action="" method="POST">
            <h1>Sign up</h1>
            <label for="Email">Email</label>
            <input type="text" placeholder="Email or Phone" name="username">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
            <label for="password">Password confirmation</label>
            <input type="password" placeholder="Password confirmation" name="passwordConfirmation">

            <input type="submit" id="submit" placeholder="submit">

        </form>
    </div>


</body>

</html>