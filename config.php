<?php

declare(strict_types=1);
ini_set('display_errors', '1');
error_reporting(E_ALL);


$dbName = 'xlife';
$host = 'localhost';
$user = 'root';
$password = '';

$conn = new mysqli($host, $user, $password, $dbName);

if ($conn->connect_error) {
    die("Ulanishda xato: "  . $conn->connect_error);
}
?>