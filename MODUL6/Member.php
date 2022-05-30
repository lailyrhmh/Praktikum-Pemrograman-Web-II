<?php
    include 'Model.php';

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

        <div class="col text-start">
            <a class="btn btn-secondary" href="index.php">Beranda</a>
        </div>


        <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="padding-bottom: 12px;">Data Member</h4>
                <a class="btn btn-primary" href="FormMember.php">Tambah Member</a>
            </div>
            <div class="card-body">
                <?php
                    if (isset($_GET['hapus'])) {
                                            
                        if ($_GET['hapus']=='berhasil'){
                            echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menghapus Data Member!</div>";
                        }else if ($_GET['hapus']=='gagal'){
                            echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menghapus Data Member!</div>";
                        }    
                    }  
                    if (isset($_GET['update'])) {
                                            
                        if ($_GET['update']=='berhasil'){
                            echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Mengubah Data Member!</div>";
                        }else if ($_GET['update']=='gagal'){
                            echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Mengubah Data Member!</div>";
                        }    
                    }  
                ?>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor Member</th>
                            <th scope="col">Password</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Mendaftar</th>
                            <th scope="col">Tanggal Terakhir Bayar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        create_member();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


    </div>

</body>
</html>