<!DOCTYPE html>

<html>
<head>
	<title>Insert Biodata</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>

<body>
	<div class="container">	
		<div class="row">
    		<div class="col-md-3"></div>
    		<div class="col-md-6">
	  			<center><h1>INPUT BIODATA MAHASISWA</h1></center>
	 			<br>
    	
				<form action="input.php" method="post">

				<div class="form-group">
					<label>NPM :</label>
					<input type="text" class="form-control" name="npm">
				</div>
		
				<div class="form-group">
					<label>Nama :</label>
					<input type="text" class="form-control" name="nama">
				</div>
        
				<div class="form-group">
					<label>Alamat :</label>
            		<textarea class="form-control" rows="3" name="alamat"></textarea>
				</div>

				<div class="form-group">
					<label>Tanggal Lahir :</label>
					<input type="date" class="form-control" name="tgl_lhr">
				</div>
        
				<div class="form-group">
					<label>Jenis Kelamin :</label><br/>
					<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki </label>
            		<label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan </label>
				</div>

				<div class="form-group">
					<label>E-Mail :</label>
					<input type="text" class="form-control" name="email">
				</div>
    
			    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
				</form>		
    		</div>
    		
			<div class="col-md-3"></div>
		</div>
	</div>    
</body>
</html>