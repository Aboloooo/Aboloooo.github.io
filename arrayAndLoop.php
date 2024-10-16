<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$array = [];
//      key         value         
$array["adult"] = "Abolo";
$array["child"] = "Ali";
$array["teeneger"] = "Hassan";

foreach($array as $key => $value){
    print($key . " " . $value . "<br>");
}

// changing the value and add something to it but with an addtional & sign
foreach($array as &$value){
    $value = $value . " is ..." . "<br>";
}

?>

</body>
</html>