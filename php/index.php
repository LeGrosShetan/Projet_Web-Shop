<?php 
session_start();


require 'Controleur/controleur.php'; 

try {
  updateCart();
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'Vpanier') {
      if(isset($_SESSION['adress'])){
        if(trim($_SESSION['adress'])!=''){ 
            Afffacture();
        }
        else{
            Affpanier();
        }
      }
      else{
        Affpanier();
      }
    }else if ($_GET['action'] == 'Vaccueil'){
      Affaccueil();
    }else if ($_GET['action'] == 'Vconnexion'){
      Affconnexion();
    }else if ($_GET['action'] == 'Vinscription'){
      Affinscription();
    }else if ($_GET['action'] == 'inscription'){
      inscription();
    }else if ($_GET['action'] == 'connexion'){
      connexion();
    }else if ($_GET['action'] == 'deconnexion'){
      deconnexion();
    }else if ($_GET['action'] == 'facturation') {
      Afffacture();
    }else{
      throw new Exception("Exception");
    }
  }else{
    Affaccueil();
  }
}catch (Exception $e) {
    erreur($e->getMessage());
}