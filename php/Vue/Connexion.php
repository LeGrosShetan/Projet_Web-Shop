<!doctype html>
<link rel="stylesheet" href="/Projet_Web-Shop/css/style.css">
<?php require '../Modele/modele.php'; ?>
<?php $titre = 'Connexion'; ?>

<?php $bdd = getBdd(); ?>
<?php $logins=queryBDD($bdd,"LOGINS","id,username,password");?>
<?php ob_start(); ?>
<!-- Contenu HTML de la page -->

<?php 
if(isset($_POST['username']) && isset($_POST['password'])){
    if(trim($_POST['username'])==""){
        $Errors="Ton nom d'utilisateur est vide !";
    }
    elseif(trim($_POST['password'])==""){
        $Errors="Ton mot de passe est vide !";
    }
    else{
        $foundRow=null; //L'index de la ligne où on va trouver nos usernames
        $list=PDOToClass($logins);
        $usernameExists=FALSE; //flag pour détecter si on à trouvé notre user
        foreach ($list as $rowNumber =>$row){
            if($row->username==trim($_POST['username'])){ //On trouve un username dans la table correspondant à celui qu'on à renseigné
                $usernameExists=TRUE;
                $foundRow=$rowNumber;
            }
        }
        if($usernameExists==TRUE && $list[$foundRow]->password == $_POST['password']){ //Si les identifiants correspondent, on est connecté + redirection sur l'index
            $_SESSION["ID"] = $list[$foundRow]->id;
            $_SESSION["username"] = $list[$foundRow]->username;
            header('Location: /Projet_Web-Shop/php/index.php');
            exit();
        }
        else{ //Sinon y'a un bug dans la matrice
            $Errors="Tes identifiants sont erronnés !";
        }
    }
}
else{ //Message de départ
    $Errors="Veuillez entrer votre nom d'utilisateur et votre mot de passe";
}?>

<?php echo "<form action='Connexion.php' method='post'>"; ?>
    <?php echo"<div class='connexion'>";?>
        <?php if(isset($Errors)){echo "<p class='Error'>".$Errors."</p><br />";}?>
        <?php echo"Nom d'utilisateur: <input type='text' name='username'>";?>
        <?php echo"Mot de passe: <input type='password' name='password'>";?>
        <?php echo"<br /> <br />";?>
        <?php echo"<button type='submit'>Se connecter</button>";?>
    <?php echo"</div>";?>
<?php echo"</form>";?>

<!-- Fin du contenu HTML de la page -->
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>