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
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body id="loginpage">
    <div class="container d-flex justify-content-center mt-5 pt-5">
        <form class="bg-light p-5" method="POST" action="ceklogin.php">
            <div class="alert alert-warning" role="alert" id="alert" style="display: none;"></div>
            <div class="alert alert-success" role="alert" id="alert" style="display: none"></div>
            <div id="judul" class="mt3"></div>
            <div class="mb-4">
                <label for="Ussername" class="form-label">Ussername</label>
                <input type="text" name="ussername" class="form-control" id="ussername">
            </div>
            <div class="mb-4">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning" name="btnlogin">Login</button>
        </form>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/login.js" type="text/javascript"></script>
</body>
</html>