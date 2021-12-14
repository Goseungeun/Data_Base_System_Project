<?php
$servername = "localhost:3306";
$username = "root";
$password = "cosmosseok99@";
// $dbname = "k_league";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error){
	die("Connection failed: " + $conn->connect_error);
}
?>

