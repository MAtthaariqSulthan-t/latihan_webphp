 <?php
    $jama=true;
      if ($jama <= true){
        echo 'masuk kls';
      }
      else {
        echo "terlambat";
      }
?>
<?php
  $nama=true;
  switch($nama){
      case $nama == 1:
        echo " benar";
        break;
      default:
        echo " salah";
      }
?><hr>
<?php
/* 
      Sorting Array 
  sort()
    rsort()
      asort()
      menggunakan key:
       ksort()
        arsort()
          krsort()
*/

  $nilai = array(60,70,80,75,90);
  rsort($nilai);
  var_dump($nilai);
  echo $nilai[0];

  echo"<hr>";

  $dtnilai = array( "dina" => 80, "sinta" => 90, "nia" => 85);
  var_dump($dtnilai);
  echo $dtnilai["sinta"];

  echo"<hr>";

  $i = array(2,3,4,5,6,7,8,9,10,11,12);
  for ($i=2 ;$i < 13; $i++){
    echo $i.", " ;
  }

  echo"<hr>";

  $a=0;
  while($a <= 13){
    if($a > 1){
      echo $a. ", ";
    }
    $a++;
  }

  echo"<hr>";

  $b = 0;
  do{
    if($b >= 2){
    echo $b.", ";
    }
    $b++;
  }while($b <= 13);

  echo"<hr>";

  $c=0;
  do{
    if($c >= 1){
      if($c%2 == 1){
        echo "_".$c.", ";
    }
      else{
        echo "<b>".$c.", "."</b>";
      }
    }
    $c++;
  }while($c <= 30);

  echo"<hr>";

  $mhs = array("putra","ardi","galang","adit","sulthan","agung");
  foreach($mhs as $m){
    echo $m.", ";
  }
  echo "<br>".$mhs[1];

  /*menghitung jumlah array:
    count($n)
    sizeof($n)*/

    echo "<hr>";

    $natok="Ase";
    $dabar= array(
        array( "kod" => "Kode B1", "bar" => "buku", "har" => "Rp.50.000"),
        array( "kod" => "Kode B2", "bar" => "Pulpen", "har" => "Rp.10.000"),
        array( "kod" => "Kode B3", "bar" => "Penghapus", "har" => "Rp.5.000")
    );
    foreach($dabar as $dab){
      echo $dab["kod"].", ".$dab["bar"].", ".$dab["har"]."<br>";
    }

?>