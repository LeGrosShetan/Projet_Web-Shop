<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/projet/css/styleInscription.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

    <main>
        <div class="container">
            <span class="title">Inscription</span>
            <div class="form">
                <form action="/projet/php/index.php?action=inscription" method="post">
                    <input type="text" id="nom" name="nom" placeholder="Nom">
                    <input type="text" id="prenom" name="prenom" placeholder="Prenom">
                    <input type="text" id="login" name="login" placeholder="Identifiant">
                    <input type="email" id="email" name="email" placeholder="Email">
                    <input type="text" id="password" name="password" placeholder="Mot de passe">
                    <input type="text" id="conf-password" name="conf-password" placeholder="Confirmez le mot de passe">
                    <input type="submit" value="Inscription">
                    <?php echo '<div style="text-align:center; max-width:282px; margin:0 ; color:red">'.$err.'</div>' ;?>
                </form>
            </div>
            <span class="redirect">Déjà inscrit ? <a href="/projet/php/index.php?action=Vconnexion">Connectez vous</a></span>
        </div>
        <a href="/projet/php/index.php?action=Vaccueil" class="retour">Retour au site</a>
    </main>

    <footer>
        <p>&copy; Copyright 2021 - Poiret & Colin.  All rights reserved.</p>
    </footer>

</body>
</html>