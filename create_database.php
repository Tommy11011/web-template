<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movies_db";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS movies_series (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(100),
    release_year INT,
    description TEXT,
    rating DECIMAL(3, 1)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table movies_series created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
