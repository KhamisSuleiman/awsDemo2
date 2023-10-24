<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Create a connection to your RDS database
$servername = "demo-db.c2wzbzgqfrv5.us-east-1.rds.amazonaws.com";
$username = "khamis";
$password = "kala1994";
$dbname = "Demo-DB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO user_data (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

