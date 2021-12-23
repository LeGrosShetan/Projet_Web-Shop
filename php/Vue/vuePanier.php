<?php $titre = 'Acceuil'; 
require '../Modele/modele.php'; 
?>
<link rel="stylesheet" href="../../css/stylepanier.scss">
<?php $bdd = getBdd(); ?>
<?php $products=queryBDD($bdd,"PRODUCTS","name,image");?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->
<div class="container" style="margin-top: 51px;">
    <div class="cart">
        <div class="basket col-md-12 col-md-offset-1">
            <div class="row product ux-card">
                <div class="col-sm-4">
                <img src="../../ressource/abricotsSecs.jpg" height="32" width="32" />
                </div>
                <div class="col-sm-4">
                    <span class="title">Nom Produit</span>
                    <span class="quantity">Quantité <input v-model="item.qty" type="number" class="form-control" placeholder="Quantité" value="1" min="1"/></span>
                </div>
                <div class="col-sm-4">
                    <span class="price">XX.XX€</span>
                    <button type="button" class="btn"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>
            <div class="row product ux-card">
                <div class="col-sm-4">
                <img src="../../ressource/abricotsSecs.jpg" height="32" width="32" />
                </div>
                <div class="col-sm-4">
                    <span class="title">Nom Produit</span>
                    <span class="quantity">Quantité <input v-model="item.qty" type="number" class="form-control" placeholder="Quantité" value="1" min="1"/></span>
                </div>
                <div class="col-sm-4">
                    <span class="price">XX.XX€</span>
                    <button type="button" class="btn"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>
            <div class="row product ux-card">
                <div class="col-sm-4">
                <img src="../../ressource/abricotsSecs.jpg" height="32" width="32" />
                </div>
                <div class="col-sm-4">
                    <span class="title">Nom Produit</span>
                    <span class="quantity">Quantité <input v-model="item.qty" type="number" class="form-control" placeholder="Quantité" value="1" min="1"/></span>
                </div>
                <div class="col-sm-4">
                    <span class="price">XX.XX€</span>
                    <button type="button" class="btn"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>
            <div class="row product ux-card">
                <div class="col-sm-4">
                <img src="../../ressource/abricotsSecs.jpg" height="32" width="32" />
                </div>
                <div class="col-sm-4">
                    <span class="title">Nom Produit</span>
                    <span class="quantity">Quantité <input v-model="item.qty" type="number" class="form-control" placeholder="Quantité" value="1" min="1"/></span>
                </div>
                <div class="col-sm-4">
                    <span class="price">XX.XX€</span>
                    <button type="button" class="btn"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>