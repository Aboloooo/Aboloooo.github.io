<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Cars = ["Volo", "Benz", "Audi", "BMW", "Tesla"]

    ?>


<select name="Cars" id="">
    <?php
    foreach ($Cars as $Car) {
    ?>
        <option value="<?= $Car ?>"><?= $Car ?></option>
    <?php 
    }
    ?>
    </select>




    
</body>

</html>