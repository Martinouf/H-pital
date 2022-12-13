<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="connexion.css" />
</head>
<body>
<?php
require('config.php');
session_start();
$mysqli = mysqli_connect("localhost", "root", "azertysio", "Hopital");


if (isset($_REQUEST['Username'], $_REQUEST['Password'])){
  $username = stripslashes($_REQUEST['Username']);
  $username = mysqli_real_escape_string($conn, $username); 
  $password = stripslashes($_REQUEST['Password']);
  $password = mysqli_real_escape_string($conn, $password);
  $NumPersonnel  = stripslashes($_REQUEST['NumPersonnel ']);
  $NumPersonnel  = mysqli_real_escape_string($conn, $NumPersonnel ); 

    $query = "INSERT into USERS (Username, Password,NumPersonnel)
              VALUES ('$username', '".hash('sha256', $password)."','$NumPersonnel')";
                  $prepareUtilisateur = $conn->prepare($query);
                  $prepareUtilisateur->execute();
    $res = mysqli_query($conn, $query);

    var_dump($prepareUtilisateur);
    


    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href=login.php>connecter</a></p>
       </div>";
       
    }
}else{
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title"><a href="../hopital.html">Hopital</a></h1>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="Username" placeholder="Nom d'utilisateur" required />
    <input type="password" class="box-input" name="Password" placeholder="Mot de passe" required />
    <input type="number" class="box-input" name="NumPersonnel " placeholder="NumPersonnel" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>