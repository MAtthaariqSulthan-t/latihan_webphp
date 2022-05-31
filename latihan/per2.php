<?php 
    $pembeli="Ana";
    $uang=15000000;
    switch ($uang){
        case $uang == 9500000 :
            echo $pembeli . "membeli asus";
            break;
        case $uang == 15000000 :
            echo $pembeli . "membeli HP";
            break;
        default:
            echo $pembeli . "harap menabung lagi";
    }
?><hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $toko="ASE";
        $kodbar="B02";
        $jumbel="6";
          if($kodbar == "B01"){
            $nabar ="Buku";
            $harga = 50000;
            if($jumbel >="3"){
              $harga = $harga - 3000;
              $hasil = $harga * 3;
          }
        $hasil = $harga * $jumbel;
      }
        else if($kodbar == "B02"){
          $nabar ="Pulpen";
          $harga = 10000;
          if($jumbel >="6"){
            $harga = $harga - 2000;
            $hasil = $harga * 3;
        }
        $hasil = $harga * $jumbel;
      } 
      else if($kodbar == "B03"){
        $nabar ="Penghapus";
        $harga = 5000;
        $hasil = $harga * $jumbel;
    }
    else{
      $nabar ="";
      $harga ="";
      $hasil ="";
      echo "tidak terdaftar: <br>";
    }
    echo $kodbar ." ". $nabar ."<br> harga barang: ".$harga."<br>beli sebanya: ". $jumbel ."<br>"."Bayar sebanyak: ".$hasil;
    ?>    
</body>
</html>