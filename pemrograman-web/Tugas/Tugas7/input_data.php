<?php       
session_start();
if ($_SESSION["level"] != "2") {
    include "logout.php";
}
?>

<html>
<head>
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a href="#">DATA MAHASISWA</a>
        <button onclick="document.location.href='logout.php'">LOGOUT</button>
    </div>
</nav>

<div class="container">
    <div class="card">
        <div class="card-header">INPUT BIODATA</div>
        <div class="card-body">
            <form action="input.php" method="post">
                <div class="form-group">
                    <label>NPM:</label>
                    <input type="text" name="npm">
                </div>
                <div class="form-group">
                    <label>Nama:</label>
                    <input type="text" name="nama">
                </div>
                <div class="form-group">
                    <label>Alamat:</label>
                    <textarea name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label><br/>
                    <input type="radio" name="jk" value="L"> Laki-Laki
                    <input type="radio" name="jk" value="P"> Perempuan
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir:</label>
                    <input type="text" name="tgl_lhr" placeholder="DD-MM-YYYY">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email">
                </div>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
</div>

</body>
</html>
