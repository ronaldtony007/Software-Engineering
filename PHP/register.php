<?php 
include 'connection.php';

$conn = openConnection();

if ($conn) {
	echo "Connected Successfully.<br>";
}

echo "Closing connection.";

closeConnection($conn);
?>