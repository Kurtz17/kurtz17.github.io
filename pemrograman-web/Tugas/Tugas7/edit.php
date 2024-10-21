<?php
session_start();
if ($_SESSION["level"] != "2") {
    include "logout.php";
}
include "koneksi.php";
$level = $_SESSION["level"];
$npm = $_GET['id'];
$_SESSION["npm"] = $npm;

if ($level == "") {
    header("location:index.php");
} elseif ($level == "1") {
    $sql = "SELECT * FROM identitas WHERE npm='$npm'";
} elseif ($level == "2") {
    $sql = "SELECT * FROM identitas";
}

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama = $row["nama"];
    $alamat = $row["alamat"];
    $jk = $row["jk"];
    $tgl = date('d-m-Y', strtotime($row['tgl_lhr']));
    $email = $row["email"];
} else {
    $npm = $nama = $alamat = $jk = $tgl = $email = "";
}
?>

<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <h2>DATA MAHASISWA</h2>
        <button class="logout-btn" onclick="document.location.href='logout.php'">LOGOUT</button>
    </div>
</nav>

<div class="container">
    <?php
    
    if (isset($_SESSION['success_message'])) {
        echo "<div class='success'>{$_SESSION['success_message']}</div>";
        unset($_SESSION['success_message']); 
    }
    
    if (isset($_SESSION['error_message'])) {
        echo "<div class='error'>{$_SESSION['error_message']}</div>";
        unset($_SESSION['error_message']); 
    }
    ?>
    <div class="card">
        <div class="card-header">EDIT BIODATA</div>
        <div class="card-body">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label>NPM:</label>
                    <input type="text" name="npm" value="<?php echo $npm; ?>">
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat"><?php echo $alamat; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label><br/>
                    <input type="radio" name="jk" value="L" <?php if ($jk == "L") echo 'checked'; ?>> Laki-Laki
                    <input type="radio" name="jk" value="P" <?php if ($jk == "P") echo 'checked'; ?>> Perempuan
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="text" name="tgl_lhr" value="<?php echo $tgl; ?>">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </div>
                <input type="submit" value="Update" name="update">
            </form>
        </div>
    </div>
</div>
</body>
</html>
