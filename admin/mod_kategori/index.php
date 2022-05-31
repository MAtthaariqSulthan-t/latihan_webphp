<?php
include_once("kategoriCtrl.php");
if(!isset($_GET['act'])){
?>
<a href="?modul=mod_kategori&act=add" class="btn btn-primary btn-xs mb-1">Tambah Data</a>
<table class="table table-bordered">
	<tr>
		<th>ID Kategori</th>
		<th>Nama Kategori</th>
		<th>Is Aktif</th>
		<th>Action</th>
	</tr>
	<?php
	$qry_list = mysqli_query($connect_db,
			"select * from mst_kategoriblog order by id_kategori DESC")
			or die("gagal akses table mst_menu ".mysqli_error($connect_db));
	while($row = mysqli_fetch_array($qry_list)){
	?>
	<tr>
		<td><?php echo $row['id_kategori']; ?></td>
		<td><?php echo $row['nm_kategori']; ?></td>
		<td><?php echo $row['is_active']?></td>
		<td>
                <a href="?modul=mod_kategori&act=edit&id=<?=$row['id_kategori'];?>" class="btn btn-outline-primary">
                        <i class="bi bi-pencil-fill">edit</i>
                    </a>
                <a href="?modul=mod_kategori&act=delete&id=<?=$row['id_kategori'];?>" class="btn btn-outline-danger">
                        <i class="bi bi-trash-fill">delete</i>
                    </a>
            </td>
	</tr>
	<?php } ?>
</table>
<?php 
//ini penutup if(!isset($_GET['act']))
	}
else if(isset($_GET['act']) && ($_GET['act']== "add")){
//ketika di add
?>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="mod_kategori/kategoriCtrl.php?modul=mod_kategori&act=save" method="POST">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori </label>
			<div class="col-md-6">
				<input type="text" name="txt_kategori" id="txt_kategori" class="form-control ">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="checkbox" name="ck_aktif" id="ck_aktif"> Aktif
			</div>
		</div>
		<div class="row">
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
<?php 
	 }
	 else if(isset($_GET['act']) && ($_GET['act']== "edit")){
		 //ini akan ditampilkan saat klik tombol edit
	?>
<div class="container-fluid">
	<h3><?php echo $judul; ?></h3>
	<form action="mod_kategori/kategoriCtrl.php?modul=mod_kategori&act=update" method="post">
		<div class="row mb-1">
			<label for="" class="col-md-2">Nama Kategori</label>
			<div class="col-md-6">
				<!-- input type hidden ini untuk menyimpan idmenu sebagai key untuk proses update data
					kenapa di hidden, karena field sbg primary key tidak boleh di edit -->
				<input type="hidden" name="txt_id" id="txt_id" class="form-control"
					value="<?php echo $data['id_kategori']; ?>">
				<input type="text" name="txt_nmkategori" id="txt_nmmenu" class="form-control"
					value="<?php echo $data['nm_kategori']; ?>">
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<input type="checkbox" name="ck_aktif" id="ck_aktif" <?php echo $check; ?>> Aktif
			</div>
		</div>
		<div class="row">
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
<?php } ?>