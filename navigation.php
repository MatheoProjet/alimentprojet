
<?php 
session_start();
ini_set('display_errors','off');
require('include/BDD.php'); ?>

 <html>
 <head>
    <link rel="stylesheet" href="css/CSS-barre.css" />
</head>
<body>
<?php if($_SESSION['rang'] == 0) { echo'
<ul>
<li><a class="active" href="index.php">Accueil</a></li>
<li><a href="services.php">Nos services</a></li>
<li><a href="#">Qui comme nous ?</a></li>
<li><a href="#">Nous contactez !</a></li>
<li style="float:right"><a class="active" href="inscription.php">Inscription</a></li>
<li style="float:right"><a class="active" href="connexion.php">Connexion</a></li>
</ul> 
<br>'; } ?>
    <?php if($_SESSION['rang'] == 1) { echo'
<ul>
<li><a class="active" href="index.php.asp">Accueil</a></li>
<li><a href="services.php">Nos services</a></li>
<li><a href="abonnement.php">Vos abonnements</a></li>
<li><a href="#">Nous contactez !</a></li>
<li style="float:right"><a class="active" href="deconnexion.php">Se déconnecter</a></li>
</ul> 
<br>'; } ?>
    <?php if($_SESSION['rang'] == 2) { echo '
<ul>
<li><a class="active" href="index.php">Accueil</a></li>
<li><a href="services.php">Nos services</a></li>
<li><a href="abonnement.php">Vos abonnements</a></li>
<li><a href="membres.php">Nos membres</a></li>
<li style="float:right"><a class="active2" href="#">Administration</a></li>
<li style="float:right"><a class="active" href="deconnexion.php">Se déconnecter</a></li>
</ul> 
<br>'; } ?>
    <?php if($_SESSION['rang'] == 12) { echo '
<ul>
<li><a class="active" href="index.php">Accueil</a></li>
<li><a href="services.php">Nos services</a></li>
<li><a href="abonnement.php">Vos abonnements</a></li>
<li><a href="membres.php">Nos membres</a></li>
<li style="float:right"><a class="active2" href="#">Mode Créateur</a></li>
<li style="float:right"><a class="active2" href="#">Administration</a></li>
<li style="float:right"><a class="active" href="deconnexion.php">Se déconnecter</a></li>
</ul> 
<br>'; } ?>
</body>
</html>