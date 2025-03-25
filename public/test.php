<?php
$servername = "localhost";
$username = "root";     // XAMPP default username
$password = "";         // XAMPP default password (empty)
$dbname = "greatmindstl_db"; // Your database name

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  echo "Connected successfully!";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}