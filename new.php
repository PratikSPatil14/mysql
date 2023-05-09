<?php
$host = "localhost"; // your host name
$user = "root"; // your database username
$password = ""; // your database password
$database = "pratikdb"; // your database name

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
