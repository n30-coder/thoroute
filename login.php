<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6501249";
$password = "yqlRn5Pgt9";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>