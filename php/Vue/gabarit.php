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
<!-- NavBar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header disabled">
      <a class="navbar-brand" href="/projet/php/index.php">Web4Shop</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="glyphicon glyphicon-shopping-cart"></span></a>
        <ul class="dropdown-menu">
        <div class="panier1">
          <p>Mon panier</p>
          <div class="panier2">
            <img class='image_shop' src='../ressource/abricotsSecs.jpg' style="width: 80px;">
            <div class="panier2 panier3">
              <p>Nom produit</p>
              <div class="panier4">
                <div class="panier5">
                  <p>Quantité</p>
                </div>
                <select class="form-control" id="sel1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10+</option>
                </select>
              </div>
            </div>
          </div>
          <li class="divider"></li>
          <div class="panier2">
            <img class='image_shop' src='../ressource/biscuitsCannelle.jpg' style="width: 80px;">
            <div class="panier2 panier3">
              <p>Nom produit</p>
              <div class="panier4">
                <div class="panier5">
                  <p>Quantité</p>
                </div>
                <select class="form-control" id="sel1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10+</option>
                </select>
              </div>
            </div>
          </div>
          <a class="btn btn-success" href="" role="button">Payer XX.XX €</a>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="glyphicon glyphicon-user"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Vue/Connexion.php">Connexion</a></li>
          <li><a href="#">Inscription</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<?= $contenu ?>

<!-- Footer -->
<footer class="container-fluid text-center">
  <p>Maxime POIRET & Justin COLIN © 2021</p>
</footer>
</body>
</html>