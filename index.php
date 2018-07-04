<?php


$host = getenv('MYSQL_MASTER_SERVICE_HOST');
$port = getenv('MYSQL_MASTER_SERVICE_HOST_PORT');

$username = "root";
$password = "lizhen";
$database = "lizhen";

$mysqli = new mysqli($host, $username, $password, $database, $port);

var_dump($mysqli);
