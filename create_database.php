<?php
include_once 'dbconfig.php';

// Create database
$sql = "CREATE DATABASE tt";

if($conn->query($sql) === TRUE){
	echo "Database testdb created successfully";
	echo "<br/><a href='create_table.php'>Click to create a table !</a>";
}else{
	echo "Error creating database: ";
	echo "<br/>";
	echo $conn->error;
}

$conn->close();
?>

