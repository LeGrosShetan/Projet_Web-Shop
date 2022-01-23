<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/styleConnexion.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

    <main>
        <div class="container">
            <span class="title">Connexion</span>
            <div class="form">
                <form action="/projet/php/index.php?action=connexion" method="post">
                    <input type="text" id="login" name="login" placeholder="Identifiant">
                    <input type="password" id="password" name="password" placeholder="Mot de passe">
                    <a href="#">Mot de passe oublié ?</a>
                    <input type="submit" value="Connexion">
                    <?php echo '<div style="text-align:center; max-width:282px; margin:0 ; color:red">'.$err.'</div>' ;?>
                </form>
            </div>
            <span class="redirect">Vous n'avez pas de compte ? <a href="/projet/php/index.php?action=Vinscription">Inscrivez-vous</a></span>
        </div>
        <a href="/projet/php/index.php?action=Vaccueil" class="retour">Retour au site</a>
    </main>

    <footer>
        <p>&copy; Copyright 2021 - Poiret & Colin.  All rights reserved.</p>
    </footer>

</body>
</html>