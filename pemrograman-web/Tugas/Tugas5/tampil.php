<!DOCTYPE html>

<html>
<head>
  <title>Output Data Mahasiswa</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>

<body>   
  <div class="container">
    
  <?php
    include "koneksi.php";     
    //tampilkan data 
     
    $sql = "SELECT npm, nama, alamat, tgl_lhr, jk, email FROM identitas";
    $result = $conn->query($sql);
  ?> 

  <h1>Record Database Mahasiswa Unpad</h1>       
  
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>E-Mail</th>
        <th>Action</th>
      </tr>
    </thead>
    
    <tbody>
      <?php 
        if ($result->num_rows > 0) {
        // output data of each row
        $iter=0;

        while($row = $result->fetch_assoc()) {
          $iter++;
          ?>
      
          <tr>
            <td><?php echo $iter;?></td>
            <td><?php echo $row["npm"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["alamat"];?></td>
            <td><?php echo $row["tgl_lhr"];?></td>
            <td><?php echo $row["jk"];?></td>
            <td><?php echo $row["email"];?></td> 
            <td>
              <a href="update_data.php?id=<?php echo $row['npm'];?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>  
              <a href="delete.php?id=<?php echo $row['npm'];?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </td>
          </tr>
      
          <?php        
        }
        } else {
            echo "0 results";
        }

    $conn->close();
    
    ?>
    </tbody>
  </table>
          
  <form action="input_data.php" method="post">
    <input type="submit" class="btn btn-primary" value="Input Data" name="logout">
  </form> 

      </div>    
</body>
</html>