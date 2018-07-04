<?php


$host = getenv('MYSQL_MASTER_SERVICE_HOST');
$port = getenv('MYSQL_MASTER_SERVICE_HOST_PORT');

$username = "root";
$password = "lizhen";
$database = "lizhen";

$newInst = mysql_connect("$host:$port", $username, $password);
mysql_select_db($database, $newInst);

var_dump($newInst);
