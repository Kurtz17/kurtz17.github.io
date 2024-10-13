<?php
if (!isset($_COOKIE['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?= htmlspecialchars($_COOKIE['username']) ?>!</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
