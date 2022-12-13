<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="ind.css" />

</head>
<body>
<?php
require('config.php');


 
	// connexion dans la base de données
	$link = mysql_connect("localhost", "root", "")or die("Impossible de se connecter : " . mysql_error());
	mysql_select_db("antiquitebdd");
 
	$result = mysql_query("SELECT login, password FROM acces WHERE login = '$_POST[login]' AND password = '$_POST[pass]'");
	$membre = mysql_fetch_assoc($result);
 
 
 
 
     if(($_POST[login]==$membre[login])&&($_POST[pass]==$membre[pass]))
	{
		setcookie("id",$membre[id]); // genere un cookie contenant l'id du membre
		setcookie("login",$membre[login]); // genere un cookie contenant le login du membre		
		echo "1"; // on 'retourne' la valeur 1 au javascript si la connexion est bonne
	}
	else 
	{
		echo "0"; // on 'retourne' la valeur 0 au javascript si la connexion n'est pas bonne
	}
?>
</form>
<?php  ?>
</body>
</html>