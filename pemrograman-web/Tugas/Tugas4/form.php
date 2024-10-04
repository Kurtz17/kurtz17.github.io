<?php

function displayForm()
{
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Mahasiswa</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <h2>Input Data Mahasiswa</h2>
            <form method="POST">
                <label for="npm">NPM:</label><br>
                <input type="text" id="npm" name="npm" required><br><br>

                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" required><br><br>

                <label for="alamat">Alamat:</label><br>
                <input type="text" id="alamat" name="alamat" required><br><br>

                <label for="tempat_lahir">Tempat Lahir:</label><br>
                <input type="text" id="tempat_lahir" name="tempat_lahir" required><br><br>

                <label for="tanggal_lahir">Tanggal Lahir:</label><br>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

                <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select><br><br>

                <label for="hobi">Hobi:</label><br>
                <input type="text" id="hobi" name="hobi" required><br><br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </body>
    </html>
    ';
}


function displayResult($npm, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $hobi)
{
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="result-container">
            <h2>Hasil Input Data Mahasiswa</h2>
            <p><strong>NPM:</strong> ' . $npm . '</p>
            <p><strong>Nama:</strong> ' . strtoupper($nama) . '</p>
            <p><strong>Alamat:</strong> ' . strtoupper($alamat) . '</p>
            <p><strong>Tempat Lahir:</strong> ' . $tempat_lahir . '</p>
            <p><strong>Tanggal Lahir:</strong> ' . $tanggal_lahir . '</p>
            <p><strong>Jenis Kelamin:</strong> ' . $jenis_kelamin . '</p>
            <p><strong>Hobi:</strong> ' . $hobi . '</p>
        </div>
    </body>
    </html>
    ';
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    
    displayResult($npm, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $hobi);
} else {
    

    displayForm();
}
?>