<?php
    require 'controllers/controller.php';

    $controller = new controller() ;

    if(isset($_GET['action'])){
      if($_GET['action'] == "afficherClient") {
        $controller->visualiserClient($_GET['nom_client']);
      }
      elseif ($_GET['action'] == "creerClient") {
        $controller->creerClient($_GET['id_client'],$_GET['$nom_client']);
      }
      elseif ($_GET['action'] == "modifierClient"){
        $controller->modifierClient($_GET['$id_client']);
      }
      elseif ($_GET['action'] == "ajouterAssuranceVie"){
        $controller->ajouterAssuranceVie($_GET['$id_produit']);
      }
      elseif ($_GET['action'] == "ajouterAssuranceDeces"){
        $controller->ajouterAssuranceDeces($_GET['$id_produit']);
      }
      elseif ($_GET['action'] == "ajouterAssuranceVoiture"){
        $controller->ajouterAssuranceVoiture($_GET['$id_produit']);
      }
    else {
        $controller->visualiserClient();
    }
  }
 ?>
