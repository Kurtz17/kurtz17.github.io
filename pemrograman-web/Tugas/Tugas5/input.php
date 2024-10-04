<?php    

include "koneksi.php"; 

//input data
if(isset($_POST['submit']))
{   
  $npm=$_POST['npm'];
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $tgl_lhr=$_POST['tgl_lhr'];       
  $email=$_POST['email'];
  $jk=$_POST['jk'];       
 
  if((!empty($npm)) && (!empty($nama))) {     
    $sql = "INSERT INTO identitas (npm, nama, alamat, tgl_lhr, jk, email) 
            VALUES ('$npm', '$nama', '$alamat', '$tgl_lhr', '$jk', '$email')";
    
    if ($conn->query($sql) === TRUE) {
      // redirect ke halaman tampil data
      header("Location: tampil.php");
    } 
    else {
        echo "Error : ".$sql."<br>".$conn->error;
    }
  }
  else {
    echo "NPM dan Nama Tidak boleh NULL";     
  }
}

$conn->close();
?>