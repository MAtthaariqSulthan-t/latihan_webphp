<?php 
include_once("blogCtrl.php");
if(!isset($_GET['act'])){	
//jika tidak ditemukan pengiriman variabel "act"

?>
<!DOCTYPE html>
<html>
<head>
  <script src="../../asset/tinymce/js/tinymce/tinymce.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script type='text/javascript'> 
	tinymce.init({ selector:'textarea'});
  </script>
</head>
<body>
<a href="?modul=mod_blog&act=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Judul</th>
		<th>Id kategori</th>
		<th>isi</th>
        <th>Author</th>
        <th>Date</th>
		<th>img</th>
        <th>Action</th>
	</tr>
	<?php	
	$qry_listmenu = mysqli_query($connect_db,"SELECT * FROM mst_blog order by id_blog DESC")
			or die(mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_listmenu)){
		$idk= $row['id_kategori'];
		$qk= mysqli_query($connect_db, "SELECT * FROM mst_kategoriblog WHERE id_kategori='$idk'");
		if($qk2 = mysqli_fetch_array($qk)){
	?>
	<tr>
		<td><?= $row['id_blog']; ?></td>
		<td><?= $row['judul']; ?></td>
		<td><?= $qk2['nm_kategori']; ?></td>
        <td><?= $row['isi']; ?></td>
        <td><?= $row['author']; ?></td>
        <td><?= $row['date_input']; ?></td>
		<td><img src="../asset/img/<?= $row['img'];?>" width="50px" height="50px"></td>
		<td>
			<a href="?modul=mod_blog&act=edit&id=<?= $row['id_blog'];?>" class="btn btn-outline-primary p-1">
				<i class="bi bi-trash">Edit</i></a>
			<a href="?modul=mod_blog&act=delete&id=<?= $row['id_blog'];?>" class="btn btn-outline-danger p-1">
				<i class="bi bi-trash">Delete</i></a>
		</td>
	</tr>
	<?php }}?>
</table>
<?php 
} //ini penutup if(!isset($_GET['act']))
else if(isset($_GET['act']) && ($_GET['act']== "add")){
//ketika di add
?>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script type='text/javascript'> 
	tinymce.init({ selector:'textarea'});
  </script>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="mod_blog/blogCtrl.php?modul=mod_blog&act=save" method="POST" enctype="multipart/form-data">
		<div class="row mb-1">
			<label for="" class="col-md-2">Judul</label>
			<div class="col-md-6">
				<input type="text" name="txt_judul" class="form-control ">
			</div>
		</div>
        <!-- id kategori -->
        <div class="row mb-1">
            <label for="" class="col-md-2">kategori</label>
                <div class="col-md-6"> 
                    <select name="txt_kategori" id="" class="form-select">
                        <?php 
                        $qry_listmenu = mysqli_query($connect_db,"select * from mst_kategoriblog")
                        or die (mysqli_error($connect_db));
                        while($row = mysqli_fetch_array($qry_listmenu)){ 
                            ?>
                        <option value="<?=$row['id_kategori']?>" ><?=$row['nm_kategori']?></option>
                        <?php   }  ?>
                    </select>
                </div> 
        </div>
		<div class="row mb-1">
            <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-6">
					<textarea name="txt_isi" class="form-control" id="teksarea" cols="55" rows="5"></textarea>
  	            </div>
        </div>
        <div class="row mb-1">
			<label for="" class="col-md-2">Author</label>
			<div class="col-md-6">
				<input type="text" name="txt_author" id="txt_link" class="form-control ">
			</div>
		</div>
        <div class="row mb-1">
			<label for="" class="col-md-2">Date</label>
			<div class="col-md-6">
				<input type="date" name="txt_date" id="txt_link" class="form-control ">
			</div>
		</div>
		<div class="row mb-1">
			<label for="" class="col-md-2">Upload</label>
			<div class="col-md-6">
					<input type="file" name="urlfile" class="form-control">
			</div>
		</div>
		<div class="row pt-1">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
			</div>
		</div>
	</form>
</div>
<?php } 
	else if(isset($_GET['act']) && ($_GET['act']=="edit")) {
 ?>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  	<script type='text/javascript'> 
	tinymce.init({ selector:'textarea'});
 	</script>
	<div class="container">
		<h3><?= $judul; ?></h3>
		<form action="mod_blog/blogCtrl.php?modul=mod_blog&act=update" method="POST" enctype="multipart/form-data">
			<div class="row mb-1">
				<label for="" class="col-md-2">Judul</label>
				<div class="col-md-6">
					<input type="hidden" name="txt_idblog" class="form-control" value="<?=$data['id_blog'];?>">
					<input type="text" name="txt_judul" class="form-control" value="<?=$data['judul'];?>">
				</div>
			</div>
			<div class="row mb-1">
				<label for="" class="col-md-2">Kategori</label>
				<div class="col-md-6">
					<select name="txt_kategori" id="" class="form-select">
						<?php
						$qiup=mysqli_query($connect_db, "SELECT * FROM mst_kategoriblog");
						while($se=mysqli_fetch_array($qiup)){
							if($se['id_kategori'] === $data['id_kategori']){
								$select = "selected";
							}
							else{
								$select = "";
							}
						?>
						<option value="<?= $se['id_kategori'];?>" <?= $select; ?> ><?= $se['nm_kategori'];?></option>
						<?php
						};
						?>
					</select>
				</div>
			</div>
			<div class="row mb-1">
				<label for="" class="col-md-2">isi</label>
				<div class="col-md-6">
					<textarea name="txt_isi" class="form-control" id="teksarea" cols="55" rows="5"><?=$data['isi'];?></textarea> 
				</div>
			</div>
			<div class="row mb-1">
				<label for="" class="col-md-2">Author</label>
				<div class="col-md-6">
					<input type="text" name="txt_author" class="form-control" value="<?=$data['author']?>">
				</div>
			</div>
			<div class="row mb-1">
				<label for="" class="col-md-2">Date</label>
				<div class="col-md-6">
					<input type="date" name="txt_date" class="form-control" value="<?=$data['date_input'];?>">
				</div>
			</div>
			<div class="row mb-1">
				<label for="" class="col-md-2">Upload</label>
				<div class="col-md-6">
					<input type="file" name="urlfile" class="form-control" value="<?=$data['img'];?>">
				</div>
			</div>
			<div class="row pt-1">
				<div class="col-md-2"></div>
				<div class="col-md-6">
				<button type="reset" name="btnreset" value="btnbatal" class="btn btn-xs btn-secondary p-1">
					<i class="bi bi-x-lg"></i> Batal</a></button>
				<button type="submit" name="btnsimpan" value="btnsimpan" class="btn btn-xs btn-primary p-1">
					<i class="bi bi-save"></i> Simpan</a></button>
				</div>
			</div>
		  </form>
		</div>
		<?php }; ?>
		<script src="../../asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>