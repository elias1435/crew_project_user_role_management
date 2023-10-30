<?php
$dbHost = 'your_db_host';
$dbName = 'your_database_name';
$dbUser = 'your_db_username';
$dbPass = 'your_db_password';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}