<?php
	require_once "../../config/koneksi_db.php";
	require_once "../../config/config.php";
    
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $informasi = $_POST['informasi'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($connect_db, "iNSERT INTO mst_responden (email, nama, informasi, keterangan) VALUES ('$email', '$nama', '$informasi', '$keterangan');");

    header("Location: ../../index.php");
    
?>