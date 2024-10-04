<?php
    include "koneksi.php";

    $npm=$_GET['id'];

    $sql = "DELETE FROM identitas WHERE NPM = '$npm'";

    if ($conn->query($sql) == TRUE) {
        // redirect ke halaman tampil data
        header("Location: tampil.php");
    } else {
        echo "Error : ".$sql."<br>".$conn->error;
    }
?>