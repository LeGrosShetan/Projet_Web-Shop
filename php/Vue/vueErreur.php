<?php $titre = 'Erreur'; ?>

<?php ob_start(); ?>
<!-- Contenu HTML de la page -->
<main>
    <h1>Erreur</h1>
    <a href="/projet/php/index.php?action=Vaccueil"><button>Retour à l'acceuil</button></a>
</main>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>