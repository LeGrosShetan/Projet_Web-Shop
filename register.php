<?php
$dbb = require 'connexion.php';
$UN = "Delaroche";
$PW = "56a5d2bd85e6c9956d122f59f79540ee0f75e5ad";

$sql = "SELECT * FROM logins WHERE 'username'=$UN AND 'password'=$PW";
$result = $bdd->query($sql);
$logins = $result->fetchAll(PDO::FETCH_ASSOC);
if ($logins) {
  // show the publishers
  foreach ($logins as $login) {
    echo $login['id'] . '<br>';
  }
}
else{
  echo"No users found";
}
?>
