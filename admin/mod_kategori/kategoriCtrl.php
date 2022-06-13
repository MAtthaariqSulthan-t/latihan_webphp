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
	$judul = "Form Input Data Kategori";
}
else if(isset($_GET['act']) && ($_GET['act'])=="edit"){
    $judul = "Form Edit Data Kategori";
    $keyid = $_GET['id'];
    $qikat =mysqli_query($connect_db, "select *from mst_kategoriblog where id_kategori='$keyid'")
    or die(mysqli_error($connect_db));
    $data =mysqli_fetch_array($qikat);
    $aktif=$data['is_active'];
    if($aktif == 1){
        $check="checked";
    }
    else{
        $check="";
    }
}
else if (isset($_GET['act']) && ($_GET['act'])=="save"){
	$nmkategori =$_POST['txt_kategori'];
	if(isset($_POST['ck_aktif'])){
		$aktif=1;
	}
	else{
		$aktif=0;
	}
	$dtinsert=mysqli_query($connect_db,
		"INSERT into mst_kategoriblog (nm_kategori, is_active) VALUES ('$nmkategori', '$aktif')")
		or die(mysqli_error($connect_db));
			if($dtinsert){
				header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_kategori");
			}
}
else if(isset($_GET['act']) && ($_GET['act']=="update")){
	//jika ada send variabel act=update, ketika proses simpan ubah data
	$idkategori = $_POST['txt_id'];
	$namakt = $_POST['txt_nmkategori'];
		if(isset($_POST['ck_aktif'])){
			$aktif = 1;
		}
		else{
			$aktif = 0;
		}
	//query untuk simpan
	$qiup = mysqli_query($connect_db, 
		"UPDATE mst_kategoriblog SET nm_kategori='$namakt', is_active='$aktif' WHERE id_kategori='$idkategori'")
		or die(mysqli_error($connect_db));
			if($qiup){
				//ketik proses simpan update berhasil
				header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_kategori");
	}
}

else if(isset($_GET['act']) && ($_GET['act']=="delete")){
	$id_user=$_GET['id'];

	$datadelete=mysqli_query($connect_db,
	"DELETE FROM mst_kategoriblog WHERE id_kategori='$id_user' ");
	if($datadelete){
		header("Location: http://localhost/latihan_webphp/admin/home.php?modul=mod_kategori");
	}	
}
