<?php


$host = getenv('MYSQL_MASTER_SERVICE_HOST');
$port = getenv('MYSQL_MASTER_SERVICE_HOST_PORT');

$username = "root";
$password = "lizhen";
$database = "lizhen";

try {
	$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully"; 
	var_dump($conn);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

