<?php 
  	require_once "config/koneksi_db.php";
    require_once "config/config.php";	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Sulthan</title>
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <span class="navbar-brand" >My Project</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="resume.html">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="UASPRO/index.html">My Store</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="download/flexbox-20211123T115548Z-001.zip">flexbox</a></li>
                <li><a class="dropdown-item" href="download/css-20211123T115559Z-001.zip">css</a></li>
                <li><a class="dropdown-item" href="download/bootstrap-5.1.3-dist.zip">bootstrap</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="bg-info bg opacity-75">
      <div class="container-fluid d-flex flex-column align-items-center pb-4 pt-4">
        <img src="asset/img/img2.jpg" class="rounded-circle" alt="" width="200px" />
        <h3 class="font-1 pt-4 text-light text-center">My Project Web</h3>
        <h5 class="light">Created By Sulthan</h5>
      </div>
    </header>
    <section id="aboutme">
      <div class="container-fluid d-flex flex-column align-items-center pb-4 pt-4">
        <h3 class="text-info fw-bold">About Me</h3>
        <div class="row">
          <h6 class="text-center pt-3">I have vision to build business in the field of distribution, farm and electronics</h6>
          <hr>
      <!-- section -->
    </section>
    <section id="myblog">
      <div class="container-fluid d-flex flex-column align-items-center pb-4 pt-4">
        <h3 class="text-info fw-bold pb-4">My Blog</h3>
        <?php 
          $qloop = mysqli_query($connect_db, "SELECT * FROM mst_blog");
          while($row = mysqli_fetch_array($qloop)){
        ?>
        <div class="row mb-4">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<img src="asset/img/<?=$row['img'];?>" width="270" class="img-fluid img-thumbnail" />
				</div>
				<div class="col-md-6">
					<h4><?=$row['judul'];?></h4>
					<div>
						<span class="badge bg-info text-white rounded-3 fs-6"><?=date("Y/m/d",strtotime($row['date_input']));?></span>
						<span class="text-primary fs-6">Edited By : Sulthan</span>
					</div>
          
            <p><?php $baka=$row['isi'];
                     $humax=200;

                     $result=substr($baka,0,$humax);
                     echo $result;
            ?></p>
            <a href="detailblog.php?id=<?=$row['id_blog'];?>">Baca Selengkapnya</a> 
					</p>
					<hr />
				</div>
			</div>
      <?php }?>
      <!-- my content -->
        <!-- <div class="container row">
          <div class="col-md-2 mb-2"></div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem; background-color: slategray">
              <img src="asset/img/img3.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">My Ilust</h5>
                <p class="card-text text-light">sunpass</p>
                <a href="detailblog1.html" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem; background-color: slategray;">
              <img src="asset/img/gam1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-light">About PHP</h5>
                <p class="card-text text-light">WebServer adalah sebuah aplikasi server yang melayani permintaan HTTP atau HtTPS...</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
              <div class="col-md-2 mb-2"></div>
            </div>
          </div> -->
        </div>
    </section>
    <hr>
    <!-- Contact -->
    <section id="contact">
      <div class="container pb-4">
        <div class="row text-center">
          <div class="col">
            <h3 class="text-info fw-bold">Contact Me</h3>
          </div>
        </div>
        <form action="admin/mod_coresponden/respondenCtrl.php" method="POST" id="formkorespon">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Information</label>
              <input type="text" name="informasi" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div> 
              <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">kirim</button>
          </div>
        </div>
        </form>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="btnyes">Ya</button>
            </div>
          </div>
        </div>
      </div>
<!-- modal -->
    </section>

    <!-- footer -->
    <footer">
    <section class="secondary text-light bg-dark pb-5 pt-3">
      <div class="container">
        <div class="row pt-3">
          <div class="col-md-2"></div>
          <div class="col-md-4"><h6>My Office </h6></div>
          <div class="col-md-6"><h6>Social Media</h6></div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4">
              <div>
                Nama M.A.Sulthan Y.P.<br>
                Contac me <a style="text-decoration: none;" href="https://api.whatsapp.com/send/?phone=085707240519&text&app_absent=0" class="text-success"> 085707240519</a><br>
                Lokasi <a style="text-decoration: none;" href="">Perum Taman Indah Regency, Sidoarjo</a><br>
                Email <a style="text-decoration: none;" href="mailto:yogaperdana78@gmail.com">yogaperdana78@gmail.com</a>
            </div>
          </div>
          <div class="col-md-2">
            <div>
              <div>Instagram </div>  
              <div>Facebook </div>
              <div>Youtube </div>
              <div>Whastsapp</div>
            </div>           
          </div>
          <div class="col-md-4">
            <a style="text-decoration: none; color: blueviolet;" href="https://www.instagram.com/atth_aariq1/?hl=en" class="bi bi-instagram"></i> atth_aariq1</a><br>
            <a style="text-decoration: none;" href="https://www.facebook.com/Sulthan-LibrarySa-109246628296586/?ref=pages_you_manage" class="bi bi-facebook text-primary"> Sulthan Library'Sa</a><br>
            <a  style="text-decoration: none;" href="https://www.youtube.com/channel/UCuNHmeTXL-Ugr2Dg6HjX-Lg" class="bi bi-youtube text-danger"> SulthanPage</a><br>
            <a style="text-decoration: none;" href="https://api.whatsapp.com/send/?phone=085707240519&text&app_absent=0" class="bi bi-whatsapp text-success"> 085707240519</a>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
    </section> 
    </footer>
    <!-- <footer class="bg-dark p-3" id="footer">
      <div class="container-fluid d-flex justify-content-between">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-light"></div>
        <div class="col-md-4 text-light"><i class="bi bi-instagram bg-light"></i></div>
        <div class="col-md-4"></div>
      </div>
    </footer> -->
  <!-- end modal -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="proses.js"></script>
  </body>
</html>
