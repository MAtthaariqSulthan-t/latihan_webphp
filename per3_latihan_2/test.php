<?php
    //1.include() digunakan kan untuk pemanggilan file, 
    //pemangilan include() dapat dilakukan berulang rulang 
    include('../per4/index.php');
    include('include.php');
    include('include.php');    include('include.php');
    //sedangkan include_once hanya bisa digunakan sekali
    include_once('include2.php');
    include_once('include2.php');include_once('include2.php');
    include_once('index.html');
    include_once('index.html');

    //2.fungsi define() membuat kontanta MENGUNAKAN PARAMETER KEY DAN KEY_VALUE,
    //fungsi ini dapat membuat konstanta anpa menunakan $.
    define("nama","Ancong");
    echo nama;
    echo "<br>";


    //fungsi explode dan implode
    //Fungsi explode untuk memecah array 
    $mobil="bmw,merci,becak,avanza,ofRoad";
    $mobil= explode(",",$mobil);
    var_dump($mobil);
    echo "<hr>";
    //Fungsi implode untuk menggabungakan array menjadi satu string
    $mobil=array("mobil","bis","kereta","truck");
    $mobilken=implode(",",$mobil);
    echo $mobilken;
    echo"<hr>";

    //fungsi trim,ltrim,rtrim
    //menghapus karakter dari string
    $makanan = " nasi goreng,";
    echo $maka = rtrim($makanan, ",");
    echo "<br>";
    var_dump($maka);
    echo "<hr>";

    //Fungsi strchr(), substr(), str_replace(), srttolower, strtoupper(), explode()
    $susu="SUSU MURNI NASIONAL";
    $susuin = explode(" ",$susu);
    var_dump($susuin);
    echo "<hr>";

    //Fungsi php untuk pembulatan bilangan float 
    echo "round(5.6)= ".round(5.6)."<br>"."round(5.4)= ".round(5.4);
    echo "<br>ceil(5.6)= ". ceil(5.6)."<br>"."ceil(5.4)= ".ceil(5.4);
    echo "<br>floor(5.6)= ". floor(5.6)."<br>"."floor(5.4)= ".floor(5.4);
    echo "<hr>";

    //Fungsi convert string to int, dan contohnya
    $str="12345";
    echo number_format($str);
    $ing="12345";
    echo "<br>".(int)$ing;
    $s="12345";
    echo "<br>".(float)$s;
    $i="12345";
    echo "<br>".(double)$i;

?>