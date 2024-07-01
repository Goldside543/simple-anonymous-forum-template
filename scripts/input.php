<?php
// Left blank for template reasons
$servername = "-----";
$username = "-----";
$password = "-----";
$dbname = "-----";
$port = 0000;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    $sql = "INSERT INTO message (text) VALUES ('$text')";

    if ($conn->query($sql) === TRUE) {
        echo "New message created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
