<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titre ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/projet/css/style.scss">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    
</head>
<body>

    <!-- NavBar -->
    <header>
        <nav class="nav">
            <ul class="nav-list">
                <li><p>Web4Shop</p></li>
                <li id="AccLi"><a href="/projet/php/index.php?action=Vaccueil"><i class="fa fa-home"></i></a></li>
            </ul>
            <ul class="nav-list">
                <li id="PanLi"><button><i class="fa fa-cart-arrow-down" onclick="toggleP()"></i></button></li>
                <li><button><i class="fa fa-user" onclick="toggleM()"></i></button></li>
            </ul>
        </nav>

        <?php echo "<div class='panier-container' style='display: none;' id='panierMenu' ;>
                <span class='titre'>Votre Panier</span>";
                $total=0;

                foreach($_SESSION['panier'] as $key=>$products){
                    $quantite=$_SESSION['panierQuantity'][$key];
                    echo "<div class='produit'>
                    <div class='image'><img src='/projet/ressource/$products->image' style='width: 100px; height: 100px;'></div>
                    <div class='info'>
                        <div class='text'>
                            <span>$products->name</span>
                            <span><button class='suppr_product' value=$products->id><i class='fa fa-trash'></i></button></span>
                        </div>
                            <div class='text'>
                                <span>Quantité</span>
                                <div class='compteur'>
                                    <span><button class='decremente'";if($quantite==1){echo"style='display:none'";}echo" value=$key><i class='fa fa-minus'></i></button></span>
                                    <span>$quantite</span>
                                    <span><button class='incremente' value=$key><i class='fa fa-fa fa-plus'></i></button></span>
                                </div>
                            </div>
                            <div class='text'>
                                <span>Prix Unité</span>
                                <span>$products->price €</span>
                            </div>
                        </div>
                    </div>";
                    $total+=$quantite*$products->price;
                }
                
                echo "<div class='total'>
                    <span>Total</span>
                    <span>$total €</span>
                </div>";
                if($_SESSION['panier']!=[]){
                    echo"<button class='payer'><a href='/projet/php/index.php?action=Vpanier'>Payer</a></button>";
                }
                echo "</div>";
        ?>

        <?php if(!isset($_SESSION["login"])){
            echo"<div class='compte-container-disconnect' style='display: none' id='accountMenu' ;'>
                <ul class='nav-compte'>
                    <li><a href='/projet/php/index.php?action=Vconnexion'>Connexion</a></li>
                    <li><a href='/projet/php/index.php?action=Vinscription'>Inscription</a></li>
                </ul>
            </div>";
        }else{
            echo "<div class='compte-container-connect' style='display: none' id='accountMenu' ;'>
                <ul class='nav-compte'>
                    <li>Connecté en tant que ".$_SESSION["login"]."  </li>
                    <li><a href='/projet/php/index.php?action=deconnexion'>Deconnexion</a></li>
                </ul>
            </div>";
        }?>

    </header>

    <?= $contenu ?>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="foot-info">
                <div class="left">
                    <div class="box"><i class="fa fa-map-marker"></i><p>15 Bd André Latarjet, 69100 Villeurbanne</p></div>
                    <div class="box"><i class="fa fa-phone"></i><p>06 39 45 45 45</p></div>
                    <div class="box"><i class="fa fa-envelope"></i><p>contact@web4shop.com</p></div>
                </div>
                    <div class="right">
                    <h1>À propos de nous</h1>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                </div>
            </div>
            <div class="foot-copy">
                <p>&copy; Copyright 2021 - Poiret & Colin.  All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script type = "text/javascript" src="/projet/js/script.js"></script>
</body>
</html>