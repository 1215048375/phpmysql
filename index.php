<?php


$host = getenv('MYSQL_MASTER_SERVICE_HOST');
$host = getenv('MYSQL_MASTER_SERVICE_HOST_PORT');

$mysqli = new mysqli($host, $username, $password, $database, $port);

var_dump($mysqli);
