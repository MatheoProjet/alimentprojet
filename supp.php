<?php 
include('include/header.php');
	if(isset($_GET['type']) AND $_GET['type'] == 'aliments') {
	   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
	      $supprime = (int) $_GET['supprime'];
	      $req = $bdd->prepare('DELETE FROM aliments WHERE id = ?');
	      $req->execute(array($supprime));
	   }
	 }
$aliments = $aliments = $bdd->query('SELECT * FROM aliments ORDER BY id');
?>
<center>
<table>
    <thead>
        <tr>
            <th colspan="5"><h2 style="font-family: cursive; text-align: center;">Supprimer des Produits</h2></th>
        </tr>
    </thead>
    <thead>
        <tr>
            <th colspan="5" style="padding: 20px;">
            <a href="index.php"><button style="float: left; margin-left: 20px;" class="btn_retour">Retour à l'accueil</button></a>
       </tr>
    </thead>
    <tbody>
    	<tr>
            <td style="background-color: #333; color: #fff; width: 30%; text-align: center;"><b>Produits</b></td>
            <td style="background-color: #333; color: #fff; width: 30%; text-align: center;"><b>Action</b></td>
        </tr> 
        <tr>
        	<?php while($a = $aliments->fetch()) { ?>
            <td style="background-color: #333; color: #fff; width: 30%; text-align: center;"><b><?= $a["nom"] ?></b></td>
            <td style="background-color: #333; color: #fff; width: 30%; text-align: center;"><a href="supp.php?type=aliments&supprime=<?= $a['id'] ?>"><font color="red"><b>Supprimer</b></font>&emsp;ou&emsp;<a href="modif.php?id=<?= $a['id'] ?>"><font color='green'><b>Modifier</b></font></td>
        </tr>
<?php } ?>
    </tbody>

</table>
</center>
