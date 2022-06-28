<?php
include('include/header.php');

    if(isset($_GET['type']) AND $_GET['type'] == 'plus') {
       if(isset($_GET['quantiter'])) {
          $quantiter = (int) $_GET['quantiter'];
          $req = $bdd->prepare('UPDATE aliments SET quantiter = quantiter + 1 WHERE id = ?');
          $req->execute(array($quantiter));
       }
   }
    if(isset($_GET['type']) AND $_GET['type'] == 'moins') {
       if(isset($_GET['quantiter2'])) {
          $quantiter2 = (int) $_GET['quantiter2'];
          $req = $bdd->prepare('UPDATE aliments SET quantiter = quantiter - 1 WHERE id = ?');
          $req->execute(array($quantiter2));
      }
    }
    $aliments = $bdd->query('SELECT * FROM aliments ORDER BY type ASC,nom ASC');
    ?>
<br>
<br>
<br>
<center>
<table>
    <thead>
        <tr>
            <th colspan="5"><h2 style="font-family: cursive; text-align: center;">Liste des produits restant</h2></th>
        </tr>
    </thead>
        <thead>
        <tr>
            <th colspan="5" style="padding: 20px;">
                <a href="ajout.php"><button style="float: left; margin-left: 20px;" class="btn2">Ajouter un article</button></a><a href="liste.php"><button style="float: left; margin-left: 60px;" class="btn">Liste à prévoir</button></a><a href="supp.php"><button style="float: right; margin-right: 20px;" class="btn3">Supprimer ou Modifier un article</button></a>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="background-color: #333; color: #fff; width: 10%; text-align: center;"><b>Genre</b></td>
            <td style="background-color: #333; color: #fff; width: 40%; text-align: center;"><b>Produits</b></td>
            <td style="background-color: #333; color: #fff; width: 20%; text-align: center;"><b>Quantités</b></td>
        </tr>

        
            <?php while($a = $aliments->fetch()) { ?>
                <tr>
            <td style="background-color: #333 ; color: #fff; width: 10%; text-align: center;"><b><?= $a["type"] ?></b></td>
            <td style="background-color: #333 ; color: #fff; width: 40%; text-align: center;">
                <?php if($a["quantiter"] < $a["minimum"]) { 
                    echo "<b><font color='red'>".$a['nom']."</font></b>"; 
                }
                elseif($a["quantiter"] > $a["minimum"]) { 
                    echo "<b><font color='#fff'>".$a['nom']."</font></b>";
                }
                elseif($a["quantiter"] = $a["minimum"]) { 
                    echo "<b><font color='orange'>".$a['nom']."</font></b>";
                }
                elseif($a["minimum"] == 0) { 
                    echo "<b><font color='grey'>".$a['nom']."</font></b>";
                }
                ?>
            </td>
            <td style="background-color: #333 ; color: #fff; width: 10%; text-align: center;">
            <a href="votreliste.php?type=plus&quantiter=<?= $a['id'] ?>"><img src="./images/plus.png"></a>
            &emsp;<b><?= $a["quantiter"] ?></b>&emsp;
            <a href="votreliste.php?type=moins&quantiter2=<?= $a['id'] ?>"><img src="./images/moins.png"/></a>
            </td>
            </tr>

            <?php } ?>    
    </tbody>
</table>
</center>

