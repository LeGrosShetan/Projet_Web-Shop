<?php $titre = 'Acceuil'; ?>

<?php ob_start(); ?>
<!-- Contenu HTML de la page -->

<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>