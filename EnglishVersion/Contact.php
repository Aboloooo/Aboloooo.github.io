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
    if(!isset($_GET["name"])){
        ("filed ". $_GET["name"] . "must be completed.");
    }elseif(!isset($_GET["LastName"])){
        print("filed ". $_GET["LastName"] . "must be completed.");
    }elseif(!isset($_GET["Email"])){
        print("filed ". $_GET["Email"] . "must be completed.");
    }
?>
<form action="">
    <input type="text" placeholder="First name" name="UserName">
    <input type="text" placeholder="Last name" lastName="LastName">
    <input type="email" placeholder="Email" Email="Email">
    <input type="submit">
</form>
</body>
</html>