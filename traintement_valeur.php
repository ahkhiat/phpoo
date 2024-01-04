<h1>Liste des valeurs</h1>
<?php

include ("valeur.php");

$valeur1 = new Valeur ("BNP", 159.50);
echo $valeur1 -> getinfo();
?>