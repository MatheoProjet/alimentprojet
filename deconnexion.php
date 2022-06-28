<?php
$bdd = new PDO("mysql:host=localhost;dbname=produit;charset=utf8", "root", "");
session_start();  
session_unset();  
session_destroy();  
header('Location: index.php');  
exit();  
?> 