<?php 

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=web4shop;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    return $bdd;
}

function queryBDD($bdd){
    $stmt = $bdd->prepare("SELECT * FROM PRODUCTS /*where name = ?*/");
    $stmt->execute(/*[$_GET['name']]*/);
    echo "<div class='container'>";
    foreach ($stmt as $row) {
      echo "<a href='#'><div class='div_produits'>".$row['name']."<img class='image_shop' src='../ressource/".$row['image']."'></div></a>";
    }
    echo "</div>";
}