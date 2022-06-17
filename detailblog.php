<?php 
  	require_once "config/koneksi_db.php";
    require_once "config/config.php";	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Blog</title>
    <link rel="stylesheet" href="asset/style.css" />
    <style>
    .center {
     display: block;
     margin-left: auto;
     margin-right: auto;
     width: 550px;
    }
    </style>
</head>
<body>
    <?php 
        $idkey = $_GET['id'];
        $qtampil = mysqli_query($connect_db, "SELECT * FROM mst_blog WHERE id_blog='$idkey'");
        while($row = mysqli_fetch_array($qtampil)){
    ?>
    <div class="container-fluid d-flex flex-column align-items-center pb-4 pt-4">
        <h3 class="text-info fw-bold pb-4"></h3>
        <div class="row mb-4">
				<div class="col-md-2"></div>
                    <h1><?=$row['judul'];?></h1>
				<div class="col-md-2">
					<img src="asset/img/<?=$row['img'];?>" width=""  class="center" />
				</div>
				<div class="col-md-6">
					<div>
						<span class="badge bg-info text-white rounded-3 fs-6"><?=date("Y/m/d",strtotime($row['date_input']));?></span>
						<span class="text-primary fs-6">Edited By : Sulthan</span>
					</div>
                        <p><?=$row['isi'];?></p>
				</div>
			</div>
        </div>
        <?php }?>
</body>
</html>