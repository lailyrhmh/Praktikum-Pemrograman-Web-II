<?php
    $host = 'localhost';
    $nama = 'root';
    $pass = '';
    $db = 'peminjaman_buku';
    
    $koneksi = mysqli_connect($host, $nama, $pass, $db);
    if($koneksi->connect_errno > 0)
		echo "Koneksi gagal:".mysqli_connect_error();
?>