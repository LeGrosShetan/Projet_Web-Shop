<?php 
require 'Modele/modele.php'; 

function Affaccueil(){
    $categoriesClass = prepAccueil()[0];
    $productsClass = prepAccueil()[1];
    $sortedProducts = prepAccueil()[2];
    require 'Vue/vueAccueil.php';
}

function Affpanier(){
    require 'Vue/vuePanier.php';
}

function Affconnexion(){
    $err = bddConnexion();
    require 'Vue/vueConnexion.php';
}

function Affinscription(){
    $err = bddInscription();
    require 'Vue/vueInscription.php';
}

function connexion(){
    $err = bddConnexion();
    if($err == null){
        Affaccueil();
    }else{
        AffConnexion();
    }
}

function inscription(){
    $err = bddInscription();
    if($err == null){
        connexion();
    }else{
        Affinscription();
    }
}

function erreur($msgErreur){
    require 'Vue/vueErreur.php';
}

function deconnexion(){
    bddDeconnexion();
    require 'Vue/vueDeconnexion.php';
}

function Afffacture(){
    require 'facture.php';
    unset($_SESSION['adress']);
}