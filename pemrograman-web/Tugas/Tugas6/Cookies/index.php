<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="title">Login</h2>
        <section>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username"><strong>Username</strong></label>
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" name="login">Login</button>
            </form>
            <?php
            if (isset($_GET['error'])) {
                echo "<p class='error'>Username atau password salah!</p>";
            }
            ?>
        </section>
    </div>
</body>
</html>
