<?php 
session_start();
if (isset($_SESSION['nomor_member']) == '')
    {
        header("location: FormLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-sm">
        <br>
        <h1 class="text-center">
            Sharing Book
        </h1>

        <div class="card">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="Buku.php">Buku</a>
            </div>
            <div class="card-header py-3">
                <a class="btn btn-primary" href="Member.php">Member</a>
            </div>
            <div class="card-header py-3">
                <a class="btn btn-primary" href="Peminjaman.php">Peminjaman</a>
            </div>
        </div>
    </div>
    </div>


    </div>

</body>
</html>