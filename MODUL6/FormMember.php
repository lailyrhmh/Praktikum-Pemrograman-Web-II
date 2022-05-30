<?php
include 'Model.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Mengatur ukuran tampilan -->
    <div class="container-sm">
        <br>

        <?php

        if(isset($_GET['id'])) {
            $id_member=$_GET['id'];
            $query=mysqli_query($koneksi, "select * from member where id_member='$id_member'");
            $data=mysqli_fetch_array($query);
        ?>
            <div class="text-center">
            <h4>Form Update Data Member</h4>
            <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Member.php">Kembali</a>
            </div>
            <!-- Membuat card -->
            <div class="card">
                <form method="POST">
                    <div class="card-header text-center">
                        <div class="row">
                            <div class="col-11 text-start">
                                <h4>Form Update Data Member</h4>
                            </div>
                            <div class="col-1 text-end">
                                <a class="btn-close" aria-label="Close" href="Member.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
                            <!-- menampilkan data pada inputan dengan mengatur value/ nilai yang telah disimpan dalam variabel: -->
                            <h6>Id : </h6>
                            <input type="text" name="id_member" class="form-control" value="<?php echo $data['id_member'] ?>" readonly><br>
                            
                            <h6>Nama : </h6>
                            <input type="text" name="nama_member" class="form-control" value="<?php echo $data['nama_member'] ?>" required><br>
                            
                            <h6>Nomor Member : </h6>
                            <input type="text" name="nomor_member" class="form-control" value="<?php echo $data['nomor_member'] ?>" required><br>

                            <h6>Password : </h6>
                            <input type="text" name="password" class="form-control" value="<?php echo $data['password'] ?>" required><br>
                            
                            <h6>Alamat : </h6>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" required><br>

                            <h6>Tanggal Mendaftar : </h6>
                            <input type="text" name="tgl_mendaftar" class="form-control" value="<?php echo $data['tgl_mendaftar'] ?>" required><br>
                            
                            <h6>Tanggal Terakhir Bayar : </h6>
                            <input type="text" name="tgl_terakhir_bayar" class="form-control" value="<?php echo $data['tgl_terakhir_bayar'] ?>" required><br>

                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="update_member">Ubah</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['update_member'])) {
                edit_member();
            }

        } 
        else {

        ?>
            <div class="text-center">
                <h4>Form Tambah Data Siswa</h4>
                <br>
            </div>
            <div class="col text-start">
                <a class="btn btn-warning" href="Member.php">Kembali</a>
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
                                <a class="btn-close" aria-label="Close" href="Member.php"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="card-body">
    
                            <?php
                                //Validasi untuk menampilkan alert / pesan pemberitahuan
                                if (isset($_GET['add'])) {
                            
                                    if ($_GET['add']=='berhasil'){
                                        echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menambah Data Member!</div>";
                                    }else if ($_GET['add']=='gagal'){
                                        echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menambah Data Member!</div>";
                                    }    
                                }
                            ?> 
    
                            <h6>Id : </h6>
                            <input type="text" name="id_member" class="form-control" placeholder="Id Member" required><br>
                            
                            <h6>Nama : </h6>
                            <input type="text" name="nama_member" class="form-control" placeholder="Nama Member" required><br>
                            
                            <h6>Nomor Member : </h6>
                            <input type="text" name="nomor_member" class="form-control" placeholder="Nomor Member" required><br>

                            <h6>Password : </h6>
                            <input type="text" name="password" class="form-control" placeholder="Password" required><br>
                            
                            <h6>Alamat : </h6>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required><br>
    
                            <h6>Tanggal Mendaftar : </h6>
                            <input type="text" name="tgl_mendaftar" class="form-control" placeholder="Tanggal Mendaftar" required><br>
                            
                            <h6>Tanggal Terakhir Bayar : </h6>
                            <input type="text" name="tgl_terakhir_bayar" class="form-control" placeholder="Tanggal Terakhir Bayar" required><br>
                            
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary" type="submit" name="add_member">Simpan</button>
                    </div>
                </form>
            </div>
        
        <?php
            if(isset($_POST['add_member'])) {
                add_member();
            }
            
        }

        ?>
    </div>

</body>

</html>