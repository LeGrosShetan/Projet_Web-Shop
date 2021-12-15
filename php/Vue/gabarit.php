<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="#"><span class="glyphicon glyphicon-th-list"></span></a></li>
    </ul>
    <div class="navbar-header" style="margin: 0 0 0 15px">
      <a class="navbar-brand" href="#">Web4Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Accueil</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Compte</a></li>

      
    </ul>
  </div>
</nav>
    <?= $contenu ?>
<footer class="container-fluid text-center">
  <p>Maxime POIRET & Justin COLIN © 2021</p>
</footer>
</body>
</html>