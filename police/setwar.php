<?php
$servername = "localhost";
$username = "*USERNAME*";
$password = "*PASSWORD*";
// Replace *USERNAME* and *PASSWORD* with the corresponding login for MySql.
$dbname = "pddata";
// Replace database name if needed.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_GET['name']; 
$active = $_GET['active']; 

$sql = "INSERT INTO warrants (name, active)
VALUES ('$name', '$active')";

if ($conn->query($sql) === TRUE) {
    echo "Warrant Set Successfully!";
	header('Refresh: 2; URL = ..\index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>