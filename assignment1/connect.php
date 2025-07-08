<?php
$host = 'localhost';
$user = 'root';        // your MySQL username
$password = '';        // your MySQL password
$database = 'assignment1'; // replace with your actual DB name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
