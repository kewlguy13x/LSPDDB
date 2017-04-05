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
$birth = $_GET['birth']; 

$sql = "INSERT INTO lspddb (name, birth)
VALUES ('$name', '$birth')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Refresh: 2; URL = add.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>