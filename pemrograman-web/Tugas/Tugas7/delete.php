<?php
session_start();
if ($_SESSION["level"] != "2") {
    include "logout.php";
}

include "koneksi.php";

$npm = $_GET['id'];
$sql1 = "DELETE FROM identitas WHERE npm='$npm'";
$sql2 = "DELETE FROM users WHERE npm='$npm'";

if (($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)) {

    $_SESSION['success_message'] = "Data berhasil dihapus.";
    header("Location: tampil_data.php");
    exit(); 
} else {
    
    $_SESSION['success_message'] = "Error: " . $conn->error;
    
    header("Location: tampil_data.php");
    exit(); 
}

$conn->close();
?>
