<?php
session_start();
include "koneksi.php"; 
$npm = $_SESSION["npm"];
$level = $_SESSION["level"];

if ($level == "") {
    header("location:index.php");
} elseif ($level == "1") {
    $sql = "SELECT * FROM identitas WHERE npm='$npm'";
} elseif ($level == "2") {
    $sql = "SELECT * FROM identitas";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
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
        <div class="card">
            <div class="card-header"><h6>DAFTAR MAHASISWA</h6></div>
            <div class="card-body">
                <?php
                if (isset($_SESSION['success_message'])) {
                    echo "<div class='success'>{$_SESSION['success_message']}</div>";
                    unset($_SESSION['success_message']); 
                }
                $result = $conn->query($sql);
                ?>     
                <table class="mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPM</th>
                            <th>NAMA</th>
                            <th>ALAMAT</th>
                            <th>JK</th>
                            <th>TGL LAHIR</th>
                            <th>EMAIL</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$row['npm']}</td>
                                    <td>{$row['nama']}</td>
                                    <td>{$row['alamat']}</td>
                                    <td>{$row['jk']}</td>
                                    <td>{$row['tgl_lhr']}</td>
                                    <td>{$row['email']}</td>
                                    <td>
                                        <div class='button-group'>
                                            <a class='edit-btn' href='edit.php?id={$row['npm']}'>Edit</a>";

                            if ($level == "2") {
                                echo "<a class='delete-btn' href='delete.php?id={$row['npm']}'>Delete</a>";
                            }

                            echo "</div>
                                  </td>
                                  </tr>";
                            $no++;
                        }
                    } else {
                        echo "<tr><td colspan='8'>Tidak ada data.</td></tr>";
                    }
                    ?>
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>  
</body>
</html>
