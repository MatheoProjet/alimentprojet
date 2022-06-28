<?php 
include('include/header.php');
$aliments = $bdd->query('SELECT * FROM aliments ORDER BY type ASC,nom ASC');
?>

<br>
<br>
<br>
<center>
<table>
    <thead>
        <tr>
            <th colspan="5"><h2 style="font-family: cursive; text-align: center;">Liste des produits à racheter</h2></th>
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
            <td style="background-color: #333; color: #fff; width: 40%; text-align: center;"><b>Produits</b></td>
            <td style="background-color: #333; color: #fff; width: 20%; text-align: center;"><b>Qté Restant</b></td>
            <td style="background-color: #333; color: #fff; width: 20%; text-align: center;"><b>Qté Minimum</b></td>
        </tr>   

        <?php while($a = $aliments->fetch()) { ?>  
           <?php if($a["quantiter"] < $a["minimum"]) { 
           echo "<td style='background-color: #333; width: 40%; text-align: center;'> <font color='#fff'><b>".$a['nom']."</b></font>"; } 
           elseif($a["quantiter"] == $a["minimum"]) { 
           echo "<td style='background-color: #333; width: 40%; text-align: center; color= orange;'><font color='orange'><b>".$a['nom']."</b></font>"; } 
           ?>
          </td>

           <?php if($a["quantiter"] <= $a["minimum"]) { 
           echo "<td style='background-color: #333; color: #fff; width: 20%; text-align: center;'><b>".$a["quantiter"]."</b></td>"; } ?>

           <?php if($a["quantiter"] <= $a["minimum"]) { 
           echo "<td style='background-color: #333; color: #fff; width: 20%; text-align: center;'><b>".$a["minimum"]."</b></td>"; } ?>

            </tr>
            <?php } ?>    
    </tbody>

</table>
</center>