<?php 
require('include/BDD.php');
$ajout = $bdd->query('UPDATE aliments SET quantiter = quantiter + 1');
?>