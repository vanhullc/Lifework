<?php
$servername = "localhost";
$username = "root";
$password = "password";
$db = "lifework";

// Create connection
$mysqli = new mysqli($servername, $username);
$conn = mysqli_connect($servername, $username);
mysqli_select_db($conn, $db);

// Check connection
if ($mysqli->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   echo ("not connected");
};
?>
