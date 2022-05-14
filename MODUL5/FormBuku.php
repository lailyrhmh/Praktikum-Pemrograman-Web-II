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
            $id_buku=$_GET['id'];
            $query=mysqli_query($koneksi, "select * from buku where id_buku='$id_buku'");
            $data=mysqli_fetch_array($query);
        ?>
            <div class="text-center">
            <h4>Form Update Data Buku</h4>
            <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Buku.php">Kembali</a>
            </div>
            <!-- Membuat card -->
            <div class="card">
                <form method="POST">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-11 text-start">
                                <h4>Form Update Data Buku</h4>
                            </div>
                            <div class="col-1 text-end">
                                <a class="btn-close" aria-label="Close" href="Buku.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
                            <!-- menampilkan data pada inputan dengan mengatur value/ nilai yang telah disimpan dalam variabel: -->
                            <h6>Id : </h6>
                            <input type="text" name="id_buku" class="form-control" value="<?php echo $data['id_buku'] ?>" readonly><br>
                            
                            <h6>Judul : </h6>
                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $data['judul_buku'] ?>" required><br>
                            
                            <h6>Penulis : </h6>
                            <input type="text" name="penulis" class="form-control" value="<?php echo $data['penulis'] ?>" required><br>
                            
                            <h6>Penerbit : </h6>
                            <input type="text" name="penerbit" class="form-control" value="<?php echo $data['penerbit'] ?>" required><br>

                            <h6>Tahun Terbit : </h6>
                            <input type="text" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit'] ?>" required><br>
                            
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="update_buku">Ubah</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['update_buku'])) {
                edit_buku();
            }

        } 
        else {

        ?>
            <div class="text-center">
                <h4>Form Tambah Data Siswa</h4>
                <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Buku.php">Kembali</a>
            </div>
            <!-- Membuat card -->
            <div class="card">
                <form method="POST">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-11 text-start">
                                <h4>Form Tambah Data Buku</h4>
                            </div>
                            <div class="col-1 text-end">
                                <a class="btn-close" aria-label="Close" href="Buku.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
    
                            <?php
                                //Validasi untuk menampilkan alert / pesan pemberitahuan
                                if (isset($_GET['add'])) {
                            
                                    if ($_GET['add']=='berhasil'){
                                        echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menambah Data Siswa!</div>";
                                    }else if ($_GET['add']=='gagal'){
                                        echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menambah Data Siswa!</div>";
                                    }    
                                }
                            ?> 
    
                            <h6>Id : </h6>
                            <input type="text" name="id_buku" class="form-control" placeholder="Id Buku" required><br>
                            
                            <h6>Judul : </h6>
                            <input type="text" name="judul_buku" class="form-control" placeholder="Judul Buku" required><br>
                            
                            <h6>Penulis : </h6>
                            <input type="text" name="penulis" class="form-control" placeholder="Penulis" required><br>
                            
                            <h6>Penerbit : </h6>
                            <input type="text" name="penerbit" class="form-control" placeholder="Penerbit" required><br>
    
                            <h6>Tahun Terbit : </h6>
                            <input type="text" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required><br>
                            
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="add_buku">Simpan</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['add_buku'])) {
                add_buku();
            }
            
        }

        ?>
    </div>

</body>

</html>