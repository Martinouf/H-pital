<?php
define('DB_SERVER', '172.16.199.254');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '254');
define('DB_NAME', 'Hopital');
 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>