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
    NavigationBarF("Contact");
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
        $flag = true;
        foreach ($inputs as $key => $value) {
            if (isset($_GET[$value])) {
                if ($_GET[$value] == "") {
                    print("Veuillez remplir tous les champs !");
                    $flag = false;
                    break;
                }
            }
        }
        if ($flag == true) {
            print("Le formulaire a été soumis avec succès !");
        }
    };


    ?>
    <div class="form-location">
        <div class="container-form">
            <h3>Contactez-nous</h3>
            <form action="" method="GET">
                <input type="text" placeholder="Prénom" name="UserName">
                <input type="text" placeholder="Nom de famille" name="LastName">
                <input type="email" placeholder="Email" name="Email">
                <a href="#" class="Forgotten-password">Mot de passe oublié</a>

                <div class="countryCodeSelection">
                    <select name="countryCode" id="countryCode" require>
                        <option value="default" selected="selected">Pays</option>
                        <?php
                        $countries = [
                            "Luxembourg",
                            "France",
                            "Allemagne",
                            "Italie",
                            "Espagne",
                            "Pays-Bas",
                            "Suède",
                            "Norvège",
                            "Grèce",
                            "Pologne"
                        ];
                        foreach ($countries as $country) {
                        ?>
                            <option value="<?= $country ?>"><?= $country ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="tel" value="" name="phoneNumber" placeholder="GSM" pattern="[0-9]{9}">
                </div>



                <input type="submit" value="Soumettre" name="submit">
            </form>
            <a href="Contact.php">Réinitialiser le formulaire et rechercher</a>
        </div>
    </div>
    <!-- the following function will create a end bar in the end of the content of a webpage -->
    <?php
    EndBarF()
    ?>

</body>

</html>