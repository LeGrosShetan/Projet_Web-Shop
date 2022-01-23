<?php $titre = 'Accueil'; ?>

<?php ob_start(); ?>
<!-- Contenu HTML de la page -->
<main class="accueil ">
    <div class="logo">
        <img src='/projet/ressource/Web4ShopHeader.png'>
    </div>

    <nav class="nav2">
    <ul class="nav-list">
        <li><a href="#Biscuits">Biscuits</a></li>
        <li><a href="#Fruits Secs">Fruits Secs</a></li>
        <li><a href="#Jus">Jus</a></li>
        <li><a href="#Cafés">Cafés</a></li>
        <li><a href="#Tisanes & Thés">Tisanes & Thés</a></li>
        <li><a href="#Desserts">Desserts</a></li>
    </ul>
    </nav>

    <?php foreach ($categoriesClass as $cat){
        $cat_products = $sortedProducts[$cat->id-1]; //[$product->cat_id-1];
        echo "<div class='vente' id='$cat->name'>";
        echo "<span class='container-name'>$cat->name</span>";
        echo "<div class='container'>";
        foreach($cat_products as $products){
            echo "<div class='container2'>";
                echo "<div class='image'><img src='/projet/ressource/$products->image' style='width: 150px; height: 150px;'></div>";
                echo "<div class='info'>";
                    echo "<div class='text'>";
                        echo "<span>$products->name</span>";
                        echo "<span><button name='idProduct' class='product_selector' value=$products->id><i class='fa fa-plus-square'></i></button></span>";
                    echo "</div>";
                    echo "<div class='text'>";
                        echo "<span>Prix</span>";
                        echo "<span>$products->price €</span>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        echo "</div>";
    }?>
</main>

<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>