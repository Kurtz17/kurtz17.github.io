<?php
// Hapus cookie dengan waktu kadaluarsa di masa lalu
setcookie('username', '', time() - 3600, '/'); 
header('Location: index.php');
exit();
?>
