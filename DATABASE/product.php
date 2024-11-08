<?php
$mysqli = new mysqli("localhost", "root", "kimhien123", "THOITRANG");

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// SQL statement to create table
$sql = "CREATE TABLE IF NOT EXISTS THOITRANG(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        img VARCHAR(100) NOT NULL,
        names VARCHAR(50) NOT NULL,
        price VARCHAR(30) NOT NULL
    )"; 

// Execute query and check for errors
if ($mysqli->query($sql) === true) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>