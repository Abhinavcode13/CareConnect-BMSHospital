<?php
$host = "mysql_db";
$username = "root";
$password = "root";
$db_name = "edoc";
$port = 3306; // Default MySQL port

$database = new mysqli($host, $username, $password, $db_name, $port);

if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}

echo "";
?>
