<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mhs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Database Connection Failed : " .$conn->connect_error);
} 

echo "Database Connected Successfully";
?>