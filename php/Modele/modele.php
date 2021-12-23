<?php 
session_start();
// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=web4shop;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    return $bdd;
}

function queryBDD($bdd,$table,$columns ='*'){
    $stmt = $bdd->prepare("SELECT $columns FROM $table ");
    $stmt->execute();
    return $stmt;
}

function isImage($item){
  if(str_ends_with($item, ".jpg") || str_ends_with($item, ".png") || str_ends_with($item, ".jpeg")){
    return TRUE;
  }
  return FALSE;
}

function PDOToClass($PDOStatement){
  return($PDOStatement->fetchAll($mode =PDO::FETCH_CLASS));
}

function showQueryResults($data){
  $list = PDOToClass($data);
  echo "<div class='container'>";
  foreach ($list as $row) {
    echo "<a href='#'><div class='div_produits'>";
    foreach ($row as $item){
      if(isImage($item)){
        echo "<img class='image_shop' src='../ressource/$item'>";
      }
      else{
        echo"$item";
      }
    }
    echo"</div></a>";
  }
  echo "</div>";
}