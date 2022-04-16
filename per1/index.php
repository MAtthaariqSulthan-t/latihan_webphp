<?php
    echo "HELLO WORLD<br>";
    echo "Belajar Web<br>";
    echo '<input type="text" placeholder="2">';
     /*Sintaks PHP 
    Standar Output:
    echo, print
    pengembang: prin_r, var_dump*/
    echo "";
    //pemulisan sintag PHP
    //1.PHP dalam hatml
    //2.html dalam PHP
    /*variabel dan tipe data
        variabel tidak boleh diawali angka, tapi boleh mengandung angka
        interpolasi adalah ?*/
    $nama="Sulthan";
    //opertor
    //aritmatika
    //+ - * /
    /*penggabung string, concatenation, concat
      .*/
      $nama_d = "M";
      $nama_b = "Sulthan";
      echo "<br>" . $nama_d . "." .$nama_b;
    //operator assigment
    //=, +=, -=, *=, /=, %=, .=
    $x = 4;
    $x += 3;
    echo $x;   
    //operator perbandingan
    //<=, >=, <, >, ==, !=
    // var_dump (1=="1");
    //operator identitas
    //===, !==
    // var_dump(1==="1");
    // Logika
    //&&, ||, !
    /*$x=10;
    var_dump($x < 20 && $x %2 == 0)*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Belajarphp</title>
</head>
<body>
    <!-- penulisan pertama -->
    <h1>Hello, welcome bro <?php echo $nama;?></h1>
    <p><?php echo "halaman paragraf";?></p>
    <!-- penulisan kedua -->
    <?php 
      echo "<h1>Selamat datang $nama</h1>";
    ?>
</body>
</html>
