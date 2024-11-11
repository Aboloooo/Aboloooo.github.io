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
    NavigationBarF("");
    ?>

    <div>
        <a href="Login.php"> Se connecter </a>
    </div>

    <?php
    if (isset($_POST["username"], $_POST["password"], $_POST["passwordConfirmation"])) {
        if ($_POST["password"] == $_POST["passwordConfirmation"]) {
            print("Inscription en cours, veuillez patienter !");
            $client_DataBase = fopen("../DataBases/Client_DataBase.csv", "a");

            //A condition to add header for the database
            if (filesize("../DataBases/Client_DataBase.csv") === 0) {
                fwrite($client_DataBase, "userName" . " => " . "Password");
            };
            //adding crendintial to database for ex) abolo => 123
            fwrite($client_DataBase, "\n" . $_POST["username"] . " => " . $_POST["password"]);
        } else {
            print("Les mots de passe ne correspondent pas!");
        }
    }
    ?>

    <div class="login-form">
        <form action="" method="POST">
            <h1>s'inscrire</h1>
            <label for="Email">Email</label>
            <input type="text" placeholder="Email ou GSM" name="username">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" name="password">
            <label for="password">Confirmation du mot de passe</label>
            <input type="password" placeholder="Confirmation du mot de passe" name="passwordConfirmation">

            <input type="submit" id="submit" value="Soumettre">

        </form>
    </div>


</body>

</html>