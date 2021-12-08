<?php $titre = 'Acceuil'; ?>

<?php ob_start(); ?>
<!-- Contenu HTML de la page -->


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
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

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="">
    <div class="carousel-caption">
      <h3>More Sell $</h3>
      <p>Lorem ipsum...</p>
    </div>      
  </div>

  <div class="item">
    <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="">
    <div class="carousel-caption">
      <h3>More Sell $</h3>
      <p>Lorem ipsum...</p>
    </div>      
  </div>
</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>

<footer class="container-fluid text-center">
  <p>Maxime POIRET & Justin COLIN © 2021</p>
</footer>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>