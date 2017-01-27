<?php

require_once "/../models/conseiller.php";

class controller
{
    public function creerClient() {
        $client = new client();
        require_once "/../views/client/accueil.php";
    }


    public function modifierClient() {
        $client = new client();
        $client->setIdClient($id_client);
        $client->setNomClient($nom_client);
        return $conseiller->modifierClient();
    }
    public function visualiserClient(){
        return $conseiller->visualiserClient($client);
    }
    public function ajouterAssuranceVie(){
        $assuranceVie->setIdProduit($id_produit);
        return $conseiller->ajouterAssuranceVie($id_produit);
    }
    public function ajouterAssuranceDeces(){
        $assuranceDeces->setIdProduit($id_produit);
        return $conseiller->ajouterAssuranceDeces($id_produit);
    }
    public function ajouterAssuranceVoiture(){
        $assuranceVoiture->setIdProduit($id_produit);
        return $conseiller->ajouterAssuranceVoiture($id_produit);
    }


}
 ?>
