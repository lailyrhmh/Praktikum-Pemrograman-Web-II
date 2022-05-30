<?php
    session_start();
    include 'Koneksi.php';
    if (isset($_SESSION['nomor_member'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  style="background-color:#f2f2f2">
<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4" style="margin-top:200px">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center"><span class="font-weight-bold text-primary">SIGN IN</span></h5></div>
            <div class="card-body">
              <form action="Login.php" method="POST">                  
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping"></span>
                    <input type="text" name="nomor_member" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="addon-wrapping"></span>
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>