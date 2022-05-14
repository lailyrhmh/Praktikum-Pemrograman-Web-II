<?php
    include 'Model.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
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
                <h4 class="m-0 font-weight-bold text-primary" style="padding-bottom: 12px;">Data buku</h4>
                <a class="btn btn-primary" href="FormBuku.php">Tambah Buku</a>
            </div>
            <div class="card-body">
                <?php
                    if (isset($_GET['hapus'])) {
                                            
                        if ($_GET['hapus']=='berhasil'){
                            echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menghapus Data Buku!</div>";
                        }else if ($_GET['hapus']=='gagal'){
                            echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menghapus Data Buku!</div>";
                        }    
                    }  
                    if (isset($_GET['update'])) {
                                            
                        if ($_GET['update']=='berhasil'){
                            echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Mengubah Data Buku!</div>";
                        }else if ($_GET['update']=='gagal'){
                            echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Mengubah Data Buku!</div>";
                        }    
                    }  
                ?>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        create_buku();
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