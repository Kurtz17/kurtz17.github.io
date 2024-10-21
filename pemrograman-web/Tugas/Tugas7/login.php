<?php
session_start();

if (!isset($_POST["login"])) {
    header("location:index.php");
    exit();
} else {
    include "koneksi.php";

    $username = $_POST["username"];
    $password = sha1($_POST["pass"]);

    $sql = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $_SESSION["level"] = $row["level"];
            $_SESSION["npm"] = $row["npm"];
        }
        header("location:tampil_data.php");
        exit();
    } else {
        $_SESSION['error'] = 'Username atau password salah!';
        header("location:index.php"); 
        exit();
    }
}
?>
