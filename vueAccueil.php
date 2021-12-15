<?php $titre = 'Acceuil'; ?>

<?php $bdd = getBdd(); ?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
    <img src="../ressource/philippe.jpg" style="height: 200px;">
    <div class="carousel-caption">
      <h3>PHILIPPE ET JTE BEEEEEEEEEZE</h3>
      <p>Mais jme lave les mains avant !</p>
    </div>      
  </div>

  <div class="item">
  <img src="../ressource/biscuitNoel.jpg" style="height: 200px;">
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

<?php queryBDD($bdd); ?>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>