<?php 
    require 'Koneksi.php';

		function create_buku() {
			include "Koneksi.php";
			$tampilBuku = mysqli_query($koneksi, "SELECT*FROM buku");
				foreach($tampilBuku as $data)
				{
					echo "
					<tr>
						<td>$data[id_buku]</td>
						<td>$data[judul_buku]</td>
						<td>$data[penulis]</td>
						<td>$data[penerbit]</td>
						<td>$data[tahun_terbit]</td>		
						<td>
							<a class='btn btn-primary' href=FormBuku.php?id=$data[id_buku]>Edit</a>
							<a class='btn btn-danger' href='?id=$data[id_buku]'
							onclick = \" return confirm('Apakah anda ingin menghapus $data[judul_buku]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_buku();
					}
				}
		}


		function create_member() {
			include "Koneksi.php";
			$tampilMember = mysqli_query($koneksi, "SELECT*FROM member");
				foreach($tampilMember as $data)
				{
					echo "
					<tr>
						<td>$data[id_member]</td>
						<td>$data[nama_member]</td>
						<td>$data[nomor_member]</td>
						<td>$data[alamat]</td>
						<td>$data[tgl_mendaftar]</td>
						<td>$data[tgl_terakhir_bayar]</td>		
						<td>
							<a class='btn btn-primary' href=FormMember.php?id=$data[id_member]>Edit</a>
							<a class='btn btn-danger' href='?id=$data[id_member]'
							onclick = \" return confirm('Apakah anda ingin menghapus $data[nama_member]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_member();
					}
				}
		}


		function create_peminjaman() {
			include "Koneksi.php";
			$tampilPeminjaman = mysqli_query($koneksi, "SELECT*FROM peminjaman");
				foreach($tampilPeminjaman as $data)
				{
					echo "
					<tr>
						<td>$data[id_peminjaman]</td>
						<td>$data[tgl_pinjam]</td>
						<td>$data[tgl_kembali]</td>	
						<td>
							<a class='btn btn-primary' href=FormPeminjaman.php?id=$data[id_peminjaman]>Edit</a>
							<a class='btn btn-danger' href='?id=$data[id_peminjaman]'
							onclick = \" return confirm('Apakah anda ingin menghapus $data[id_peminjaman]'); \"
							'>Hapus</a>				
						</td>		
					</tr>";
					if(isset($_GET['id'])){
						delete_peminjaman();
					}
				}
		}


		function delete_buku() {
			include "Koneksi.php";
			$delete = mysqli_query($koneksi,"DELETE FROM buku WHERE id_buku='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Buku.php'";

			if($delete){
				echo 'Berhasil';
				header("location:Buku.php?hapus=berhasil");
			} else {
				echo 'Gagal';
				header("location:Buku.php?hapus=gagal");
			};
		}
		

		function delete_member() {
			include "Koneksi.php";
			$delete = mysqli_query($koneksi,"DELETE FROM member WHERE id_member='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Member.php'";
			
			if($delete){
				echo 'Berhasil';
				header("location:Member.php?hapus=berhasil");
			} else {
				echo 'Gagal';
				header("location:Member.php?hapus=gagal");
			};
		}


		function delete_peminjaman() {
			include "Koneksi.php";
			$delete = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id_peminjaman='$_GET[id]'");
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/peminjaman.php'";

			
			if($delete){
				echo 'Berhasil';
				header("location:Peminjaman.php?hapus=berhasil");
			} else {
				echo 'Gagal';
				header("location:Peminjaman.php?hapus=gagal");
			};
		}


		function add_buku(){
			include "Koneksi.php";
			$id_buku = $_POST['id_buku'];
			$judul_buku = $_POST['judul_buku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];

			$input = mysqli_query($koneksi, "INSERT INTO buku VALUES(
				'$id_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit'
				)") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Buku.php'";

			if($input){
				echo 'Berhasil';
				header("location:FormBuku.php?add=berhasil");
			} else {
				echo 'Gagal';
				header("location:FormBuku.php?add=gagal");
			};
		}


		function add_member(){
			include "Koneksi.php";
			$id_member = $_POST['id_member'];
			$nama_member = $_POST['nama_member'];
			$nomor_member = $_POST['nomor_member'];
			$alamat = $_POST['alamat'];
			$tgl_mendaftar = $_POST['tgl_mendaftar'];
			$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

			$input = mysqli_query($koneksi, "INSERT INTO member VALUES(
				'$id_member','$nama_member','$nomor_member','$alamat','$tgl_mendaftar','$tgl_terakhir_bayar'
				)") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Member.php'";

			if($input){
				echo 'Berhasil';
				header("location:FormMember.php?add=berhasil");
			} else {
				echo 'Gagal';
				header("location:FormMember.php?add=gagal");
			};
		}


		function add_peminjaman(){
			include "Koneksi.php";
			$id_peminjaman = $_POST['id_peminjaman'];
			$tgl_pinjam = $_POST['tgl_pinjam'];
			$tgl_kembali = $_POST['tgl_kembali'];

			$input = mysqli_query($koneksi, "INSERT INTO peminjaman VALUES(
				'$id_peminjaman','$tgl_pinjam','$tgl_kembali'
				)") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/peminjaman.php'";

			if($input){
				echo 'Berhasil';
				header("location:FormPeminjaman.php?add=berhasil");
			} else {
				echo 'Gagal';
				header("location:FormPeminjaman.php?add=gagal");
			};
		}


		function edit_buku(){
			include "Koneksi.php";
			$id = $_GET['id'];
			$judul_buku = $_POST['judul_buku'];
			$penulis = $_POST['penulis'];
			$penerbit = $_POST['penerbit'];
			$tahun_terbit = $_POST['tahun_terbit'];

			mysqli_query($koneksi, "UPDATE buku 
				SET judul_buku='$judul_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit'
				WHERE id_buku='$id'
				") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Buku.php'";
		}


		function edit_member(){
			include "Koneksi.php";
			$id = $_GET['id'];
			$nama_member = $_POST['nama_member'];
			$nomor_member = $_POST['nomor_member'];
			$alamat = $_POST['alamat'];
			$tgl_mendaftar = $_POST['tgl_mendaftar'];
			$tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

			mysqli_query($koneksi, "UPDATE member 
				SET nama_member='$nama_member', nomor_member='$nomor_member', alamat='$alamat', tgl_mendaftar='$tgl_mendaftar', tgl_terakhir_bayar='$tgl_terakhir_bayar'
				WHERE id_member='$id'
				") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/Member.php'";
		}
	


		function edit_peminjaman(){
			include "Koneksi.php";
			$id = $_GET['id'];
			$tgl_pinjam = $_POST['tgl_pinjam'];
			$tgl_kembali = $_POST['tgl_kembali'];

			mysqli_query($koneksi, "UPDATE peminjaman 
				SET tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'
				WHERE id_peminjaman='$id'
				") or DIE(mysqli_error($koneksi));
			echo "<meta http-equiv='refresh' content='2;URL=http://localhost/pemweb/MODUL5/peminjaman.php'";
		}

?>