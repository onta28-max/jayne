<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_katucafe";
try {
    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Yes you connection databases is succeefully";
} catch (PDOException $e) {
    echo "Your connection is fail" . $e->getMessage();
}