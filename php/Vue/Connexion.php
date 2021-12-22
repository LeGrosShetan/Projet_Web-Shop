<link rel="stylesheet" href="/Projet_Web-Shop/css/style.css">
<?php require '../Modele/modele.php'; ?>
<?php $titre = 'Connexion'; ?>

<?php $bdd = getBdd(); ?>
<?php $logins=queryBDD($bdd,"LOGINS","username,password");?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->
<?php echo"<div class=connexion>";?>
<?php echo"<label for='username'>Entrez votre nom d'utilisateur : </label>"; ?>
<?php echo"<input id='username'> ";?>
<?php echo"<label for='password'>Entrez votre mot de passe : </label>"; ?>
<?php echo"<input id='password'> ";?>
<?php echo"<br>";?>
<?php echo"<button class='bouton_valider'>Valider</button>";?>
<?php echo"</div>";?>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>