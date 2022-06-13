<?php 
include_once("uploadCtrl.php");
if(!isset($_GET['act'])){	
//jika tidak ditemukan pengiriman variabel "act"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
    <form action="mod_upload/uploadCtrl.php" method="post" enctype="multipart/form-data">
		<div class="row mb-1">
			<label for="" class="col-md-2">Upload</label>
			<div class="col-md-6">
				<input type="file" name="urlfile" id="txt_nmmenu" class="form-control ">
			</div>
		</div>
        <div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnupload" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
    </form>
</body>
</html>
<?php } ?>