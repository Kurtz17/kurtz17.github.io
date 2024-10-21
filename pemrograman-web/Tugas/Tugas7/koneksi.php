<?php
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = 'mhs';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if(mysqli_connect_errno())
    {
        echo "Koneksi gagal ke database";
    }
?>