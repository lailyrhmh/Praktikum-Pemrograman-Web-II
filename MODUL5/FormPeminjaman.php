<?php
include 'Model.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Mengatur ukuran tampilan -->
    <div class="container-sm">
        <br>

        <?php

        if(isset($_GET['id'])) {
            $id_peminjaman=$_GET['id'];
            $query=mysqli_query($koneksi, "select * from peminjaman where id_peminjaman='$id_peminjaman'");
            $data=mysqli_fetch_array($query);
        ?>
            <div class="text-center">
            <h4>Form Update Data Peminjaman</h4>
            <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Peminjaman.php">Kembali</a>
            </div>
            <!-- Membuat card -->
            <div class="card">
                <form method="POST">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-11 text-start">
                                <h4>Form Update Data Peminjaman</h4>
                            </div>
                            <div class="col-1 text-end">
                                <a class="btn-close" aria-label="Close" href="Peminjaman.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
                            <h6>Id : </h6>
                            <input type="text" name="id_peminjaman" class="form-control" value="<?php echo $data['id_peminjaman'] ?>" readonly><br>
                            
                            <h6>Tanggal Peminjaman : </h6>
                            <input type="text" name="tgl_pinjam" class="form-control" value="<?php echo $data['tgl_pinjam'] ?>" required><br>
                            
                            <h6>Tanggal Kembali : </h6>
                            <input type="text" name="tgl_kembali" class="form-control" value="<?php echo $data['tgl_kembali'] ?>" required><br>
                            
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="update_peminjaman">Ubah</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['update_peminjaman'])) {
                edit_peminjaman();
            }

        } 
        else {

        ?>
            <div class="text-center">
                <h4>Form Tambah Data Peminjaman</h4>
                <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Peminjaman.php">Kembali</a>
            </div>
            <!-- Membuat card -->
            <div class="card">
                <form method="POST">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-11 text-start">
                                <h4>Form Tambah Data Peminjaman</h4>
                            </div>
                            <div class="col-1 text-end">
                                <a class="btn-close" aria-label="Close" href="Peminjaman.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
    
                            <?php
                                if (isset($_GET['add'])) {
                            
                                    if ($_GET['add']=='berhasil'){
                                        echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menambah Data Peminjaman!</div>";
                                    }else if ($_GET['add']=='gagal'){
                                        echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menambah Data Peminjaman!</div>";
                                    }    
                                }
                            ?> 
    
                            <h6>Id : </h6>
                            <input type="text" name="id_peminjaman" class="form-control" placeholder="Id Peminjaman" required><br>
                            
                            <h6>Tanggal Peminjaman : </h6>
                            <input type="text" name="tgl_pinjam" class="form-control" placeholder="Tanggal Peminjaman" required><br>
                            
                            <h6>Tanggal Kembali : </h6>
                            <input type="text" name="tgl_kembali" class="form-control" placeholder="Tanggal Kembali" required><br>
                            
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="add_peminjaman">Simpan</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['add_peminjaman'])) {
                add_peminjaman();
            }
            
        }

        ?>
    </div>

</body>

</html>