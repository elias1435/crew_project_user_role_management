<?php
session_start();
include 'db.php'; // Include the database connection script

if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: unauthorized.php");
    exit();
}

?>
