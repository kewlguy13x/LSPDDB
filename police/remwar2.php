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

$sql = "DELETE FROM warrants WHERE name = '$name';";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header('Refresh: 2; URL = active.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>