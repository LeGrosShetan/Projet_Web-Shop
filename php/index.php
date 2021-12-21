<?php 
// Accès aux données du modèle
require 'Modele/modele.php'; 


try {
  // Affichage de la vue de la page d'accueil du site
  require 'Vue/vueAccueil.php';
}catch (Exception $e) {
  $msgErreur = $e->getMessage();
  // Affichage de la vue de la page d'erreur
  require 'Vue/vueErreur.php';
}





