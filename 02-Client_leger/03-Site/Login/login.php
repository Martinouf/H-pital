<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="connexion.css" />
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['Username'])){
  $username = stripslashes($_REQUEST['Username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['Password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `USERS` WHERE Username='$username' and Password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['Username'] = $username;
      header("Location: ../hopital.html");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title"><a href="../hopital.html">Hopital</a></h1>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="Username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="Password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>