<?php
$username = $_POST["username"];
$email = $_POST["email"];

$servername = "172.16.199.254";
$username = "root";
$password = "";
$db = "hopital";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br><br>";

$sql = "SELECT * FROM $username, $email WHERE $username.username = $email.email";
$result = $conn->query($sql);

$conn->close();
?>