<?php

$servername = "mysql";
$username = "user";
$password = "user_password";
$dbname = "example_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database";
?>
