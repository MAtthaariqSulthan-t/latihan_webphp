<?php
    $userdb = "admin";
    $passdb = md5("123");

    // $txt_user = $_GET['ussername'];
    // $txt_pass = md5($_GET['password']);
    $txt_user = $_POST['ussername'];
    $txt_pass = md5($_POST['password']);
    // $_server['HTTP_HOST']

    echo $txt_user;
    echo $txt_pass;

        if($txt_user == $userdb && $txt_pass == $passdb){
            echo "login berhasil";
            header ("Location: http://localhost/latihan_webphp/admin/home.php");
        }
        else{
            echo "login gagal";
            header ("Location: http://localhost/latihan_webphp/admin");
        }
?>