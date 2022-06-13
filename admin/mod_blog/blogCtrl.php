<?php 
if(isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']== "save")){
	//ketika code ini, posisi ada d folder mod_menu>admin>config
	require_once "../../config/koneksi_db.php";
	require_once "../../config/config.php";		
}
else{
	//ketika code ini, posisi ada d folder admin>config
	require_once "../config/koneksi_db.php";
	require_once "../config/config.php";
}
security_login();

if(isset($_GET['act']) && ($_GET['act']== "add")){
	//jika ada send variabel act=add, tampil form input/tambah
	$judul = "Form Input Data Blog";

}
else if(isset($_GET['act']) && ($_GET['act']=="edit")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$judul = "Form Edit Data Blog";
	$idkey = $_GET['id']; //dapat dari URL
	$qdata = mysqli_query($connect_db,"SELECT * FROM mst_blog where id_blog=$idkey")
			or die(mysqli_error($connect_db));
	$data = mysqli_fetch_array($qdata);
}
else if(isset($_GET['act']) && ($_GET['act']=="save")){
	//jika ada send variabel act=save, ketika proses simpan(insert)
	$nmjudul = $_POST['txt_judul'];
	$kategori = $_POST['txt_kategori'];
	$isi = $_POST['txt_isi'];
    $author = $_POST['txt_author'];
    $datein = $_POST['txt_date'];
	//upload file
	$file=$_FILES['urlfile'];
	$filedb=$file['name'];
    $target_dir = "../../asset/img/"; 
    $target_file=$target_dir.$file['name'];
    move_uploaded_file($file['tmp_name'], $target_file);
	//query untuk simpan
	$qinsert = mysqli_query($connect_db, "INSERT INTO mst_blog (judul, id_kategori, isi, author, date_input, img) VALUES ('$nmjudul','$kategori', '$isi', '$author', '$datein', '$filedb')")
	or die (mysqli_error($connect_db));
		if($qinsert){
		//ketik proses simpan berhasil
		header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "update")){
	//jika ada send variabel act=update, ketika proses simpan ubah data
	$idblog = $_POST['txt_idblog'];
	$nmjudul = $_POST['txt_judul'];
	$kategori = $_POST['txt_kategori'];
	$isi = $_POST['txt_isi'];
    $author = $_POST['txt_author'];
    $datein = $_POST['txt_date'];
	//update data
	$file=$_FILES['urlfile'];
	$filedb=$file['name'];
    $target_dir = "../../asset/img/"; 
    $target_file=$target_dir.$file['name'];
    move_uploaded_file($file['tmp_name'], $target_file);
	//query untuk simpan
	$qidat = mysqli_query($connect_db, 
			"UPDATE mst_blog SET judul='$nmjudul', id_kategori='$kategori', isi='$isi', author='$author', date_input='$datein', img='$filedb' WHERE id_blog='$idblog'")
			or die (mysqli_error($connect_db));
	if($qidat){
		//ketik proses simpan update berhasil
		header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_blog");
	}
}
else if(isset($_GET['act']) && ($_GET['act']== "delete")){
	//jika ada send variabel act=edit, tampil form edit/ubah data
	$idkey = $_GET['id']; //dapat dari URL
	$qdelete = mysqli_query($connect_db,"DELETE from mst_blog where id_blog=$idkey")
				or die(mysqli_error($connect_db));
	if($qdelete){
		header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_blog");
	}
}
?>