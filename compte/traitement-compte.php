<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

include("compte.php");

$compte1 = new Compte("1", "Thierry", 1000);

$compte1 -> depot(100);
echo $compte1 -> affiche() . "<br>";

$compte2 = new Compte("2", "Sabri", 4500);
$compte2 -> depot(1000);

echo $compte2 -> affiche() . "<br>";

$compte3 = new CompteAnonyme("3", 2000);
// $compte3 -> depot(1000);

echo $compte3 -> affiche() . "<br>";


?>

</body>
</html>