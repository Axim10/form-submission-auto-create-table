<?php
// Set up a new PDO database connection
$dsn = "mysql:host=localhost;dbname=user";
$username = "root";
$password = "";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
  $pdo = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// Create a new table in the database with the same field names as the form inputs
$sql = "CREATE TABLE user (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        mobile VARCHAR(15) NOT NULL,
        city VARCHAR(30) NOT NULL,
        address VARCHAR(255) NOT NULL
        )";

$pdo->exec($sql);
?>