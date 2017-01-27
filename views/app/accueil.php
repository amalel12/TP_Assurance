<?php
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <p>
       <strong>Afficher clients :</strong>
           <?php
               require_once '../../models/conseiller.php';
               require_once '../../index.php';
               require_once '../../controllers/controller.php';
               foreach ($conseiller AS $c) {
                  echo "<td><a href=../../index.php'?action=afficherClient=".$client->getIdClient()."'>".$client->getNomClient()."</a></td>";
                }
               ?>
      <strong>Creation des clients :</strong>
           <?php
                require_once '../../models/conseiller.php';
                require_once '../../index.php';
                require_once '../../controllers/controller.php';
                foreach ($conseiller AS $c) {
                   echo"<td><a href=../../index.php'?action=creerClient=".$client->getIdClient()."'>".$client->getNomClient()."</a></td>";
            }
            ?>
      <strong>Modification des clients :</strong>
            <?php
                  require_once '../../models/conseiller.php';
                  require_once '../../index.php';
                  require_once '../../controllers/controller.php';
                  foreach ($conseiller AS $c) {
                     echo"<td><a href=../../index.php'?action=modifierClient=".$client->getIdClient()."</a></td>";
              }
              ?>
      <strong>Rajout d'une assurance vie :</strong>
            <?php
                 require_once '../../models/conseiller.php';
                 require_once '../../index.php';
                 require_once '../../controllers/controller.php';
                 foreach ($conseiller AS $c) {
                     echo"<td><a href=../../index.php'?action=ajouterAssuranceVie=".$client->getTypeProduit()."</a></td>";
                         }
                      ?>
      <strong>Rajout d'une assurance deces :</strong>
            <?php
                require_once '../../models/conseiller.php';
                require_once '../../index.php';
                require_once '../../controllers/controller.php';
                foreach ($conseiller AS $c) {
                   echo"<td><a href=../../index.php'?action=ajouterAssuranceDeces=".$client->getTypeProduit()."</a></td>";
                      }
                    ?>
      <strong>Rajout d'une assurance voiture:</strong>
            <?php
                require_once '../../models/conseiller.php';
                require_once '../../index.php';
                require_once '../../controllers/controller.php';
                foreach ($conseiller AS $c) {
                    echo"<td><a href=../../index.php'?action=ajouterAssuranceVoiture=".$client->getTypeProduit()."</a></td>";
                         }
                    ?>
     </p>
   </body>
 </html>
