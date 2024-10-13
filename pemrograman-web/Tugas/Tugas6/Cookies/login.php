<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '123456') {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); 
        exit();
    } else {
        header('Location: index.php?error=true'); 
        exit();
    }
}
?>
