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

// Retrieve data from the form
    $team_name = $_POST["team_name"];
    $stadium_name = $_POST["stadium_name"];

    // Insert data into the database
    $sql = "INSERT INTO your_table_name (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>