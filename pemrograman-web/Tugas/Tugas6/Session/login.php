<?php
// Data akun yang valid
$valid_user = 'admin';
$valid_password = '123456';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password
    if ($username === $valid_user && $password === $valid_password) {
        setcookie('username', $username, time() + 3600, '/'); // Cookie berlaku 1 jam
        header('Location: welcome.php');
        exit();
    } else {
        // Redirect ke halaman login dengan pesan error
        header('Location: index.php?error=1');
        exit();
    }
}
?>
