<?php session_start();
ini_set('display_errors','off');
if($_SESSION['login']){
    	header ('Location: index.php');
    	exit();
}
require("include/BDD.php");

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['login']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membre WHERE login = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['login'] = $userinfo['login'];
         $_SESSION['mail'] = $userinfo['mail'];
         $_SESSION['rang'] = $userinfo['rang'];
         header("Location: inscription.php");
      } else {
         $erreur = "Mauvais Login ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Connexion</title>

<!-- CSS -->
<link rel="stylesheet" href="css/CSS-ci.css" />
<link rel="stylesheet" href="css/CSS-barre.css" />
<!-- Fin CSS -->

</head>
<body>
<ul>
  <li><a class="active" href="index.php">Accueil</a></li>
  <li><a href="#">Nos services</a></li>
  <li><a href="#">Qui comme nous ?</a></li>
  <li><a href="#">Nous contactez !</a></li>
  <li style="float:right"><a class="active" href="inscription.php">Inscription</a></li>
</ul> 

<br>

<center>
<form class="staps" action="" method="post" name="login">
<h1 class="staps-title">Connexion</h1>
<br>
<div class="login">
        <form action="index.php" method="post">
    <input type="login" name="login" placeholder="login" class="staps-input" /><br />
    <input type="password" name="mdpconnect" placeholder="Mot de passe" class="staps-input"/><br />
	<p></p>
    <input type="submit" name="formconnexion" class="staps-button" value="Se Connecter !">
	<p><a href="#"><font color="black">Mot de passe oublié ?</a>&ensp;<a href="register.php"><font color="black">Inscription ici !</font></a></p>
	<p></p>
    </form>
    <br>
	</div>

</body>
</html>