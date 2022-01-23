<?php $titre = 'Panier'; ?>

<?php ob_start(); ?>
<!-- Contenu HTML de la page -->

<main class="panier">
    <div class="container">
        <div class="cart">
            <div class="entete">
                <span>MON PANIER</span>
            </div>
            <?php 
            $total = 0;
            foreach($_SESSION['panier'] as $key=>$products){
                $quantite = $_SESSION['panierQuantity'][$key];
                $prix     = $quantite*$products->price;
                $total   += $prix;
                echo"<div class='produit'>
                    <div class='image'><img src='/projet/ressource/$products->image' style='width: 100px; height: 100px;'></div>
                    <div class='info'>
                        <div class='text'>
                            <span>$prix €</span>
                            <span><button class='suppr_product' value=$products->id><i class='fa fa-times'></i></button></span>
                        </div>
                        <div class='text'>
                            <span>$products->name</span>
                        </div>
                        <div class='text'>
                            <span>Quantité</span>
                            <div class='compteur'>
                                <span><button class='decremente'";if($quantite==1){echo"style='display:none'";}echo" value=$key><i class='fa fa-minus'></i></button></span>
                                <span>$quantite</span>
                                <span><button class='incremente' value=$key><i class='fa fa-fa fa-plus'></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>";
            }
            
            echo "<div class='total'>
                <span>SOUS-TOTAL</span>
                <span>$total €</span>
            </div>";

        echo"</div>
        <div class='paiement'>";
            echo"<div class='Adresse'>
                <label for='Adresse'>Adresse de livraison (Obligatoire !):</label>
                <input type='text' id='Adresse_val' name='Adresse'/>
            </div>
            </br>
            <div class='entete'>
                <span>TOTAL</span>
            </div>
            <div class='recap'>
                <div class='text'>
                    <span>Sous-total</span>
                    <span>$total €</span>
                </div>
                <div class='text'>
                    <span>Livraison</span>
                    <span><i class='fa fa-info-circle'></i></span>
                </div>
                
            </div>
            <div class='payer'>
                <a href='/projet/php/index.php?action=Vpanier'><button  class='envoi_paiement'>PAIEMENT</button></a>
                <span>NOUS ACCEPTONS :</span>
                <div class='cartes'>
                    <span><i class='fa fa-cc-visa'></i></span>
                    <span><i class='fa fa-cc-mastercard'></i></span>
                    <span><i class='fa fa-cc-paypal'></i></span>
                </div>
            </div>
        </div>
    </div>
</main>";
?>

<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>