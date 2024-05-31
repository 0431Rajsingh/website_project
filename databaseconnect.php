<?php
$servername = "localhost";
$database = "u866656205_test_db";
$username = "u866656205_root";
$password = "L@bwork2023";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>