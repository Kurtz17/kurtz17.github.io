<?php    

    include "koneksi.php"; 

    //input data
    $npm=$_POST['npm'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgl_lhr=$_POST['tgl_lhr'];       
    $jk=$_POST['jk'];
    $email=$_POST['email'];

    $sql = "UPDATE identitas SET nama = '$nama', 
                                 alamat = '$alamat', 
                                 tgl_lhr = '$tgl_lhr', 
                                 jk = '$jk', 
                                 email = '$email' 
            WHERE npm = '$npm'";
    
    if ($conn->query($sql) === TRUE) {
      // redirect ke halaman tampil data
      header("Location: tampil.php");
    } 
    else {
        echo "Error : ".$sql."<br>".$conn->error;
    }
?>