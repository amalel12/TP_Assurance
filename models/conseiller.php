<?php

  class conseiller {
    private $id_conseiller;
    private $nom_conseiller;
    private $type_produit;

    public function __construct($id,$nom,$type){
    }
    public function setIdConseiller($id){
      $id_conseiller = $id;}
    public function setNomConseiller($nom){
      $nom_conseiller = $nom;}
    public function setTypeProduit($tp){
      $type_produit = $tp;}

    public function getIdConseiller(){
      return $this->id_conseiller;}
    public function getNomConseiller(){
      return  $this->nom_conseiller;}
    public function getTypeProduit(){
      return $this->type_produit;}

    public function creerClient(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("INSERT INTO Client VALUES ($id_client,$nom_client)");
      $donnees1 = mysql_fetch_array($result);
      mysql_close($connexion);
    }
    public function modifierClient(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("UPDATE Client SET ($id_client,$nom_client) WHERE $this->$id_client=$id_client AND $this->$nom_client=$nom_client");
      $donnees2 = mysql_fetch_array($result);
      mysql_close($connexion);
    }

    public function visualiserClient(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("SELECT * FROM Client");
      $donnees3 = mysql_fetch_array($result);
      mysql_close($connexion);
    }

    public function ajouterAssuranceVie(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("INSERT INTO assurancevie VALUES($id_produit) WHERE $nom_produit ='AssuranceVie'");
      $donnees4 = mysql_fetch_array($result);
      echo ('Le produit est ajouté '+ $result);
      mysql_close($connexion);
  }

    public function ajouterAssuranceDeces(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("INSERT INTO assurancedeces VALUES($id_produit) WHERE $nom_produit ='AssuranceDeces'");
      $donnees5 = mysql_fetch_array($result);
      echo ('Le produit est ajouté '+ $result);
      mysql_close($connexion);
  }
    public function ajouterAssuranceVoiture(){
      $connexion= mysql_connect("localhost","root","");
      mysql_select_db("assurance",$connexion);
      if(!$connexion){
        die('Connexion impossible'  .mysql_error());
      }
      echo 'Correctement connecté';
      $result = mysql_query("INSERT INTO assurancevoiture VALUES($id_produit) WHERE $nom_produit ='AssuranceVoiture'");
      $donnees6 = mysql_fetch_array($result);
      echo ('Le produit est ajouté '+ $result);
      mysql_close($connexion);
  }
  }
      class client {
        private $id_client;
        private $nom_client;
        private $type_produit;

        public function setIdClient($id){
          $id_client = $id;}
        public function setNomClient($nom){
          $nom_client = $nom;}
        public function setTypeProduit($tp){
          $type_produit = $tp;}

        public function getIdClient(){
          return $this->id_client;}
        public function getNomClient(){
          return  $this->nom_client;}
        public function getTypeProduit(){
          return $this->type_produit;}

    }

    class produit {
       private $id_produit;
       private $nom_produit ;

       public function setIdProduit($id){
         $id_produit = $id;}
       public function setNomProduit($nom){
         $nom_produit = $nom;}

       public function getIdProduit(){
         return $this->id_produit;}
       public function getNomProduit(){
         return  $this->nom_produit;}
   }

    abstract class assuranceVie extends produit{
       	private $id_produit;
       	const nom_produit = "AssuranceVie";
   }


    abstract class assuranceDeces extends produit{
       	private $id_produit;
       	const nom_produit = "AssuranceDeces";
     }

    abstract class assuranceVoiture extends produit{
       	private $id_produit;
       	const nom_produit = "AssuranceVoiture";
        private $modeleVoiture;

     public function setModeleVoiture($mv){
       $modeleVoiture = $mv;}
     public function getModeleVoiture(){
       return $this->modeleVoiture;}
   }

 ?>
