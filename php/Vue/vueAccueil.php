<?php $titre = 'Acceuil'; ?>

<?php $bdd = getBdd(); ?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->

<?php queryBDD($bdd); ?>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>