<?php 

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=web4shop;charset=utf8','Colinju', 'shop', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    return $bdd;
}

function queryBDD($bdd){
    $stmt = $bdd->prepare("SELECT * FROM PRODUCTS /*where name = ?*/");
    $stmt->execute(/*[$_GET['name']]*/);
    echo "<table>";
    foreach ($stmt as $row) {
      echo "<tr><div class='div_produits'>".$row['name']."<img class='image_shop' src='../ressource/".$row['image']."'></div></tr>";
    }
    echo "</table>";
}