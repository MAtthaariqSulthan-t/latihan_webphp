<?php
    require_once("../config/koneksi_db.php");
    require_once("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Lock</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
<!-- header -->
 <header>
   <nav class="bg-dark navbar navbar-expand-lg">
    <a href="" class="navbar-brand m-2 px-3">HEADER</a>
      <div class="navbar-nav">
        <div class="nav-item">
          <a class="nav-link px-3" href="index.php">Sign out</a>
        </div>
      </div>
    </nav>
  </header>
<!-- end header -->
<!-- left menu -->
  <div class="container-fluid">
    <div class="row">
      <nav id="leftmenu" class="col-lg-2">
        <div class="">
          <?php
            // $menu= array(
            //   array("id"=>"01", "nm_menu"=>"dashboard", "link"=> "#"),
            //   array("id"=>"02", "nm_menu"=>"blog", "link"=> "#"),
            //   array("id"=>"03", "nm_menu"=>"berita", "link"=> "mod_berita"),
            //   array("id"=>"04", "nm_menu"=>"menu", "link"=> "mod_menu")
            // );
            $qry_menu = mysqli_query ($connect_db, "select * from mst_menu") or die ("view menu".mysqli_error($connect_db));

            // foreach($menu as $m){
          ?>
          <ul class="list-group list-group-flush">
            <?php 
              while ($row = mysqli_fetch_array($qry_menu)){
            ?>
            <!-- <li class="list-group-item"><//?= $m["id"] ?></li> -->
            <li class="list-group-item"><a class="nav-link" aria-current="page" href="?modul= <?=$row["link"] ?>"><?= $row["nm_menu"]; ?></a></li>
            <!-- <li class="list-group-item"><//?= $m["link"] ?></li> -->
          </ul>
          <?php } ?>
        </div>
      </nav>
<!-- content -->
  <main class="ms-sm-auto col-lg-10">
    <div class="justify-content-between alight-item-center pt-3 ">
      <h4>Content</h4>
    </div>
    <div id="content"><?php
    include("mod_menu/index.php");
  ?></div>
  </main>
    </div>
  </div>
<!-- script js -->
<script src="javascript/main.js"></script>
</body>
</html>