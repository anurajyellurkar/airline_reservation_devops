<?php
$servername = "mysql-db";   // MySQL container name
$username = "root";
$password = "root";
$dbname = "airline_system";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
