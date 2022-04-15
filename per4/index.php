<?php
    $mobil="bmw,merci,becak,avanza,ofRoad";
    $mobil= explode(",",$mobil);
    var_dump($mobil);
    echo "<hr>";
    $mobil=implode(",",$mobil);
    echo $mobil;
    echo"<hr>";
    echo date("l ,d-F-Y")."<br>"."tanggal hari ini, ".date("d/m/y")." atau ".date("Ym/d");
    date_default_timezone_set('asia/Jakarta');
    echo"<hr>"."waktu sekarang ".date("d/m/Y H:i:s");
    echo"<hr>";
    $tgllahir = date_create("05-07-2001");
    $tglharini = date("d-m-Y");
    $umur = date_diff($tgllahir, date_create($tglharini));
    echo "umur = ".$umur->format('%y tahun, %m bulan, %a hari'); 
    echo"<hr>";//membuat function
    function data_pribadi(){
        $nama = "Sulthan";
        $asal = "Blitar";
        echo "nama: ".$nama."<br>"."asal: ".$asal;
    }
    data_pribadi();
    echo "<hr>";
    
    function ceksaldo($saldo,$akun){
        if ($saldo >= 3000000){
            $ket = "Thr : ".$saldo*10/100;
        }
        else if ($saldo >= 1000000){
            $ket = "Thr : ".$saldo*20/100;
        }
        else {
            $ket = "tidak dapat";
        }
        return "Kamu mendapatkan thr : ".$ket."<br> dari saldo : ".$saldo."<br> Akun: ".$akun;
    }
    echo ceksaldo(2000000,"Jito");
?>