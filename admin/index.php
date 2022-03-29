<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript_dom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body id="loginpage" onload="welcome()">
<!-- ../ad.php = ".." untuk keluar folder -->
<div class="container pt-4 pb-4 border">
  <div id="judul"></div> 
    <main class="col-4 col-4 col-4 px-md-4 ms-sm-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3>Sign Admin_WebPHP</h4>
        </div>
          <form>
            <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
          <div> 
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <div>
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="form-check">
          </div>
          <button type="button" class="btn btn-primary" onclick="ceklogin()">Login</button>
          <a href="../index.php" class="p-3">Home</a>
        </form>
        <script src="javascript/main.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        </div>
</body>
</html>