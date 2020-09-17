<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "projectdiary";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

//$conn = new mysql('localhost','1121028','Welcome123','1121028');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>