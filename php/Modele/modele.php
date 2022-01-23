<?php 
// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=web4shop;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
    return $bdd;
}

function queryBDD($bdd,$query,$table,$columns ='*',$values='*'){
  if($query=="SELECT" && $values=='*'){
    $stmt = $bdd->prepare("SELECT $columns FROM $table");
  }
  elseif($query=="SELECT" && $values!='*'){
    $stmt = $bdd->prepare("SELECT $columns FROM $table WHERE id=$values");
  }
  elseif ($query=="INSERT INTO" && $table=="LOGINS") {
    $stmt = $bdd->prepare("INSERT INTO $table ($columns) VALUES (:id, :cus_id, :username, :pswd)");
    $stmt -> bindParam(':id', $values['id']);
    $stmt -> bindParam(':cus_id', $values['id']);
    $stmt -> bindParam(':username', $values['username']);
    $stmt -> bindParam(':pswd', $values['password']);
  }
    $stmt->execute();
    return $stmt;
}

function PDOToClass($PDOStatement){
  return($PDOStatement->fetchAll($mode =PDO::FETCH_CLASS));
}

function prepAccueil(){
  $bdd             = getBdd(); 
  $categories      = queryBDD($bdd,"SELECT","CATEGORIES","id,name"); 
  $categoriesClass = PDOToClass($categories); 
  $products        = queryBDD($bdd,"SELECT","PRODUCTS","id,cat_id,name,image,price"); 
  $productsClass   = PDOToClass($products); 
  $sortedProducts  = array([],[],[],[],[],[]);  // $sortedProducts  = array([],[],[],[],[],[]); 

  foreach($productsClass as $product){
    array_push($sortedProducts[$product->cat_id-1], $product);
  }

  return [$categoriesClass, $productsClass, $sortedProducts];
}

function bddInscription(){

  $bdd = getBdd();
  $logins=queryBDD($bdd,"SELECT","LOGINS","username");
  $Errors = null;

  if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['conf-password'])){
      if(trim($_POST['login'])==""){
        $Errors= "Ton nom d'utilisateur est vide !";
      }
      elseif(trim($_POST['password'])==""){
        $Errors="Ton mot de passe est vide !";
      }
      elseif(trim($_POST['conf-password'])==""){
        $Errors="Il faut confirmer le mot de passe !";
      }
      elseif($_POST['password']!=$_POST['conf-password']){
        $Errors="Les mots de passe sont différents !";
      }
      else{
          $list   = PDOToClass($logins);
          $nextID = count($list)+1;
          $usernameExists=FALSE; //flag pour détecter si on à trouvé notre user
          foreach ($list as $rowNumber =>$row){
              if($row->username==trim($_POST['login'])){ //On trouve un username dans la table correspondant à celui qu'on à renseigné
                  $usernameExists=TRUE;
              }
          }
          if($usernameExists==FALSE){ //Si le nom d'utilisateur n'existe pas, on crée un nouvel utilisateur
              $new_user = array("id" => $nextID, "customer_id" => $nextID, "username" => $_POST['login'],"password" => hash("sha256",$_POST['password']));
              queryBDD($bdd,"INSERT INTO","LOGINS","id,customer_id,username,password",$new_user);
          }
          else{ //Sinon on ne crée pas de nouvel utilisateur
            $Errors="Ce nom d'utilisateur ".$_POST['login']." existe déja !";
          }
      }
  }
  return $Errors;
  
}

function bddConnexion(){

  $bdd = getBdd();
  $logins=queryBDD($bdd,"SELECT","LOGINS","id,username,password");
  $Errors = null;

  if(isset($_POST['login']) && isset($_POST['password'])){
    if(trim($_POST['login'])==""){
        $Errors="Ton nom d'utilisateur est vide !";
    }
    elseif(trim($_POST['password'])==""){
        $Errors="Ton mot de passe est vide !";
    }
    else{
        $list            = PDOToClass($logins);
        $foundRow        = null;                            //L'index de la ligne où on va trouver nos usernames
        $hashed_password = hash("sha256",$_POST['password']);
        $usernameExists  = FALSE;                           //flag pour détecter si on à trouvé notre user
        foreach ($list as $rowNumber =>$row){
            if($row->username==trim($_POST['login'])){ //On trouve un username dans la table correspondant à celui qu'on à renseigné
                $usernameExists=TRUE;
                $foundRow=$rowNumber;
            }
        }
        if($usernameExists==TRUE && $list[$foundRow]->password == $hashed_password){ //Si les identifiants correspondent, on est connecté + redirection sur l'index
            $_SESSION["ID"] = $list[$foundRow]->id;
            $_SESSION["login"] = $list[$foundRow]->username;
        }
        else{ //Sinon y'a un bug dans la matrice
            $Errors="Tes identifiants sont erronnés !";
        }
    }
  }
  return $Errors;
}

function bddDeconnexion(){
  unset($_SESSION);
  session_destroy();
}

function updateCart(){
  if(!isset($_SESSION['panierID'])){
    $_SESSION['panierID']=array();
  }
  if(!isset($_SESSION['panierQuantity'])){
    $_SESSION['panierQuantity']=array();
  }
  if(isset($_SESSION['panier'])){
    if(isset($_SESSION['add_id'])){
      $bdd                 = getBdd();
      $product_to_add      = queryBDD($bdd,"SELECT","PRODUCTS","id,cat_id,name,image,price",$_SESSION['add_id']);
      $product_to_addClass = $product_to_add->fetch(PDO::FETCH_OBJ);
      if(!in_array($_SESSION['add_id'],$_SESSION['panierID'])){
        array_push($_SESSION['panier'],$product_to_addClass);
        array_push($_SESSION['panierID'],$_SESSION['add_id']);
        array_push($_SESSION['panierQuantity'],1);
      }
      unset($_SESSION['add_id']);
    }
    if(isset($_SESSION['delete_id'])){
      $length           = count($_SESSION['panierID']);
      $index            = array_search($_SESSION['delete_id'],$_SESSION['panierID']);
      $new_cart         = array();
      $new_cartId       = array();
      $new_cartQuantity = array();
      for($i=0;$i<$length;$i++){
        if($i!=$index){
          array_push($new_cart,$_SESSION['panier'][$i]);
          array_push($new_cartId,$_SESSION['panierID'][$i]);
          array_push($new_cartQuantity,$_SESSION['panierQuantity'][$i]);
        }
      }
      $_SESSION['panier']         = $new_cart;
      $_SESSION['panierID']       = $new_cartId;
      $_SESSION['panierQuantity'] = $new_cartQuantity;
      unset($_SESSION['delete_id']);
    }
    if(isset($_SESSION['decremente_key'])){
      if($_SESSION['panierQuantity'][$_SESSION['decremente_key']] > 1){
        $_SESSION['panierQuantity'][$_SESSION['decremente_key']]--;
      }
      unset($_SESSION['decremente_key']);
    }
    if(isset($_SESSION['incremente_key'])){
      $_SESSION['panierQuantity'][$_SESSION['incremente_key']]++;
      unset($_SESSION['incremente_key']);
    }
  }
  else{
    $_SESSION['panier']=array();
  }
}
