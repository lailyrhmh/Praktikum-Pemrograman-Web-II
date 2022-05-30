<?php
    session_start();

    include 'Koneksi.php';

    if (isset($_POST['login'])) {
        $nomor_member = $_POST['nomor_member'];
        $password = $_POST['password'];

        $query = "SELECT * FROM member WHERE nomor_member='$nomor_member' AND password='$password'";
        $result = mysqli_query($koneksi, $query);
        
        if (mysqli_num_rows($result)>0) {
            $run = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['nomor_member'] = $run['nomor_member'];
            $_SESSION['password'] = $run['password'];
            header("location: index.php");
        } else {
            echo "Akun yang anda masukkan salah!"; echo "<br/>";
            echo "Masukkan nomor member dan password ulang!";
            header("refresh:3; url=FormLogin.php");
        }
    }

?>