<?php 
include('include/header.php');
$aliments = $bdd->query('SELECT * FROM aliments ORDER BY id');

if(isset($_GET['id'])) {
   $requser = $bdd->prepare("SELECT * FROM aliments WHERE id = ?");
   $requser->execute(array($_GET['id']));
   $user = $requser->fetch();
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
      $newnom = htmlspecialchars($_POST['newnom']);
      $insertnom = $bdd->prepare("UPDATE aliments SET nom = ? WHERE id = ?");
      $insertnom->execute(array($newnom, $_GET['id']));
      header('Location: modif.php?id='.$_GET['id']);
   }
   if(isset($_POST['newqte']) AND !empty($_POST['newqte']) AND $_POST['newqte'] != $user['quantite']) {
      $newqte = htmlspecialchars($_POST['newqte']);
      $insertqte = $bdd->prepare("UPDATE aliments SET quantiter = ? WHERE id = ?");
      $insertqte->execute(array($newqte, $_GET['id']));
      header('Location: modif.php?id='.$_GET['id']);
   }
   if(isset($_POST['newmini']) AND !empty($_POST['newmini']) AND $_POST['newmini'] != $user['minimum']) {
      $newmini = htmlspecialchars($_POST['newmini']);
      $insertmini = $bdd->prepare("UPDATE aliments SET minimum = ? WHERE id = ?");
      $insertmini->execute(array($newmini, $_GET['id']));
      header('Location: modif.php?id='.$_GET['id']);
   } 
 }
?>

<center>
<table>
    <thead>
        <tr>
            <th colspan="5"><h2 style="font-family: cursive; text-align: center;">Modification du produit</h2></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="5" style="background-color: #333; color: #fff; height: auto; text-align: center;">
              <br>
    <div action="" method="post" name="login">
   <form method="POST">
     <b>Nom du produit:</b><br><br>
     <input type="text" name="newnom" placeholder="<?php echo $newnom; ?>" style="width: 39%; text-align: center;" class="text" /></h2>
     <br>
     <br>
       <b>Choisir la quantité dont vous disposez:</b><br><br>
     <select name="newqte" placeholder="Quantité" style="width: 40%; text-align: center;" class="text" >
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
     <select type="text" name="newmini" placeholder="Minimum" style="width: 40%; text-align: center;" class="text" >
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
       <input type="submit" value="Modifier" class="btn_ajouter" style="float: left; margin-left: 30%;" />
       <button class="btn_retour" style="float: right; margin-right: 30%;"><a href="index.php">Retour à l'accueil</a></button>
     </form>

              <br>
            </td>
        </tr>

    </tbody>
</table>
</center>