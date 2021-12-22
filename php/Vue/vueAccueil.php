<?php $titre = 'Acceuil'; ?>

<?php $bdd = getBdd(); ?>
<?php $products=queryBDD($bdd,"PRODUCTS","name,image");?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->
<?php showQueryResults($products);?>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>