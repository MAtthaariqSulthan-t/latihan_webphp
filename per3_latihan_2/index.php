<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>
<body>
    <table style="width:30%">
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Konten</th>
        <th>Action</th>
      </tr>
      <?php
        $isi=array(
          array("kod"=> "01", "nam"=> "Judul satu", "con"=> "Isi berita 01...", "las"=>"edit hapus"),
          array("kod"=> "02", "nam"=> "Judul dua", "con"=> "Isi berita 02...", "las"=>"edit hapus"),
          array("kod"=> "03", "nam"=> "Judul tiga", "con"=> "Isi berita 03...", "las"=>"edit hapus")
        );
        foreach($isi as $i){
      ?>
      <tr>
        <td><?= $i["kod"]?></td>
        <td><?= $i["nam"]?></td>
        <td><?= $i["con"]?></td>
        <td><a href=""><center><?= $i["las"]?></center></a></td>
      </tr>
      <?php
        }
      ?>
    </table>
</body>
</html>