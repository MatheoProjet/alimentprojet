<?php require("include/BDD.php"); ?>

<?php session_start();
ini_set('display_errors','off');
if($_SESSION){
    	header ('Location: index.php');
    	exit();
}

if(isset($_POST['forminscription'])) {
   $pseudo = htmlspecialchars($_POST['login']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               $reqpseudo = $bdd->prepare("SELECT * FROM membre WHERE login = ?");
               $reqpseudo->execute(array($pseudo));
               $pseudoexist = $reqpseudo->rowCount();
               if($pseudoexist == 0) {
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membre(login, mail, motdepasse, rang) VALUES(?, ?, ?, 1)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp));
                     header("Location: index.php");
                     $erreur = "<center>Votre compte a bien été créé ! </center>";
               } else {
                  $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
                  }
               } else {
                  $erreur = "Votre pseudo déjà utilisée !";
                  }
               } else {
                  $erreur = "Votre adresse mail n'est pas valide !";
                  }
               } else {
                  $erreur = "Vos adresses mail ne correspondent pas !";
                  }
               } else {
                  $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
                  }
               } else {
                  $erreur = "Tous les champs doivent être complétés !";
                  }
               }
?>

<!DOCTYPE html>
<html>
<head>
   <title>Inscription</title>

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
  <li style="float:right"><a class="active" href="connexion.php">Connexion</a></li>
</ul> 

<br>

<center>
<form class="staps" action="" method="post" name="login">
<h1 class="staps-title">Inscription</h1>
<br>
         <form method="POST" action="">
            <table>
                     <input type="text" placeholder="Votre pseudo" id="login" name="login" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" class="staps-input" />
                     <input type="email" placeholder="Veuillez inscrire l'email de l'école" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" class="staps-input"/>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" class="staps-input" />
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" class="staps-input" />
                     <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" class="staps-input" />
                  <td align="center">
                     <input type="submit" class="staps-button" name="forminscription" value="Je m'inscris" />
                     <center><font color="red">Votre compte demandera une confirmation par l'administrateur!</font></center>
                     <?php
                     if(isset($erreur)) {
                     echo '<font color="red">'.$erreur."</font>";
                     }
                     ?>
                  </td>
               </tr>
            </table>
         </form>

      </form>
   </center>
</body>
</html>

