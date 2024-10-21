<html>
<head>
    <title>Login Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar">
    <h1>DATA MAHASISWA</h1>
    </div>
</nav>

<div class="container">
    <div class="card">
        <div class="card-header">LOGIN</div>
        <div class="card-body">
            <?php
            session_start();

            if (isset($_SESSION['error'])) {
                echo '<div class="error">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']); 
            }
            ?>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="pass" required>
                </div>
                <input type="submit" value="Log In" name="login">
            </form>
        </div>
    </div>
</div>

</body>
</html>
