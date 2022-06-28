<?php 
include('include/header.php'); 
$aliments = $bdd->query('SELECT * FROM aliments ORDER BY id');
	if(isset($_POST['news_nom'], $_POST['news_type'], $_POST['news_quantiter'], $_POST['news_minimum'])) {
	   if(!empty($_POST['news_nom']) AND !empty($_POST['news_type']) AND !empty($_POST['news_quantiter']) AND !empty($_POST['news_minimum'])) {
	      
	      $article_nom = htmlspecialchars($_POST['news_nom']);
	      $article_quantiter = htmlspecialchars($_POST['news_quantiter']);
	      $article_type = htmlspecialchars($_POST['news_type']);
	      $article_minimum = htmlspecialchars($_POST['news_minimum']);
	      $ins = $bdd->prepare('INSERT INTO aliments (nom, quantiter, type, minimum) VALUES (?, ?, ?, ?)');
	      $ins->execute(array($article_nom, $article_quantiter, $article_type, $article_minimum));
	      header('Location: index.php');
	      $message = 'Votre aliment ou produit a bien été ajouter';
	   } else {
	      $message = 'Veuillez remplir tous les champs';
	   }
	}
?>

<center>
<table>
    <thead>
        <tr>
            <th colspan="5"><h2 style="font-family: cursive; text-align: center;">Ajouter des Produits</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="5" style="background-color: #333; color: #fff; height: auto; text-align: center;">
            	<br>
    <div action="" method="post" name="login">
	 <form method="POST">
	   <b>Nom du produit:</b><br><br>
	   <input type="text" name="news_nom" placeholder="Nom du produit" style="width: 39%; text-align: center;" class="text" /></h2>
	   <br>
	   <br>
	   <b>Choisir le type de produit:</b><br><br>
	   <select name="news_type" placeholder="Genre" style="width: 40%; text-align: center;" class="text" >
       <option><--Choisir le genre--></option>
       <option value="Alimentaire">Alimentaire</option>
       <option value="Produit">Produit</option>
       <option value="Autre">Autre</option>
       </select>
       <br>
       <br>
       <b>Choisir la quantité dont vous disposez:</b><br><br>
	   <select name="news_quantiter" placeholder="Quantité" style="width: 40%; text-align: center;" class="text" >
       <option>0 (par defaut)</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       </select>
       <br>
       <br>
       <b>Choisir la quantité minimum souhaité:</b><br><br>
	   <select type="text" name="news_minimum" placeholder="Minimum" style="width: 40%; text-align: center;" class="text" >
	   <option>0 (par defaut)</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       </select>
	   <br>
	   <?php if(isset($message)) { echo $message; } ?>
	   <br>
	   <br>
       <input type="submit" value="Ajouter dans la liste" class="btn_ajouter" style="float: left; margin-left: 30%;" />
       <button class="btn_retour" style="float: right; margin-right: 30%;"><a href="index.php">Retour à l'accueil</a></button>
	   </form>

            	<br>
            </td>
        </tr>

    </tbody>

</table>
</center>
