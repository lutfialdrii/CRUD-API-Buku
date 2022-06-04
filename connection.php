<?php
$dbserver = "localhost";
$dbname = "web";
$dbuser = "root";
$dbpassword = "";
$dsn = "mysql:host = {$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO($dsn, $dbuser, $dbpassword);
} catch (PDOException $e) {
    die("Koneksi Gagal: " . $e->getMessage());
}