<?php
// Database connection logic using MySQLi


$host = 'localhost';
$db   = 'carr_tech_crunch';
$user = 'root';
$pass = 'root'; // Set password to 'root'
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
