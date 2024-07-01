<?php
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

$sql = "SELECT id, text FROM message";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<body>

<h2>Messages</h2>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["text"]. "<br>";
    }
} else {
    echo "No messages found.";
}
$conn->close();
?>
</body>
</html>
