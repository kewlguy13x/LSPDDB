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
$citations = $_GET['citations']; 

$sql = "INSERT INTO citations (name, citations)
VALUES ('$name', '$citations')";

if ($conn->query($sql) === TRUE) {
    echo "Citation Issued Successfully!";
	header('Refresh: 2; URL = ..\index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>