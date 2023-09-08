<?php
// Database connection parameters
$db_host = 'db4free.net:3306';
$db_username = 'joaoboaventura2';
$db_password = 'Socceristhe1';
$db_name = 'premier_league';

// Create a database connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $country = $_POST["country"];
    $age = $_POST["age"];
    $player_number = $_POST["player_number"];
    $player_position = $_POST["player_position"];
    $market_value = $_POST["market_value"];
    $height = $_POST["height"];
    $player_team = $_POST["player_team"];

    // Insert data into the database
    $sql = "INSERT INTO players_name (first_name, last_name, country, age, player_number, player_position, market_value, height, player_team) VALUES ('$first_name', '$last_name', '$country', '$age', '$player_number', '$player_position', '$market_value', '$height', '$player_team')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>