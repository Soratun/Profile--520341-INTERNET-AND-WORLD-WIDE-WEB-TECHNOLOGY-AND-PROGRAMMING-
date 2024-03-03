<?php
$servername = "localhost";
$username = "db640710762";
$password = "D-5378b";
$dbname = "std_u640710762";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>