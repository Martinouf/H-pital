<?php
$username = $_POST["Username"];
$password = $_POST["Password"];

$servername = "localhost";
$username = "root";
$password = "azertysio";
$db = "Hopital";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br><br>";

$sql = "SELECT * FROM $username, $password WHERE $username.Username = $password.Password";
$result = $conn->query($sql);

$conn->close();
?>