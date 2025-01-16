<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Database configuration
$host = 'localhost';  // Hostname
$username = 'root';   // Database username
$password = '';       // Database password
$database = 'mycollege'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    // If there is an error, display the message
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

// Close the connection
$conn->close();
?>

</body>
</html>