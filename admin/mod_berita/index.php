<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
</head>
<body>
<!-- modal -->
  <div class="modal" tabindex="-1" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">tambah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form>
  <div class="mb-1">
    <label for="exampleInputId" class="form-label">ID</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="mb-1">
    <label for="" class="form-label">Judul</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="mb-1">
    <label for="" class="form-label">Konten</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="mb-1">
    <label for="" class="form-label">Action</label>
    <input type="text" class="form-control" id="">
  </div>
</form>
        <!-- end form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->
 <div class="container">
  <div class="col pt-4">
   <div class="d-grid gap-2 pb-2">
    <button class="btn btn-warning" type="button" data-bs-target="#tambah" data-bs-toggle="modal">tambah</button>
   </div>
    <table style="width:100%">
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
  </div>
 </div>
</body>
</html>