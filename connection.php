<?php
// Database connection parameters
$db_host = '127.0.0.1';
$db_username = 'joaoboaventura@localhost';
$db_password = 'Socceristhe1';
$db_name = 'premier_league';

// Create a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>