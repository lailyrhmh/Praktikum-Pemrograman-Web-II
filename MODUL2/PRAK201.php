<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak201</title>
</head>
<body>
    <form action="" method="post">
        Nama: 1 <input type="text" name="nama1"><br>
        Nama: 2 <input type="text" name="nama2"><br>
        Nama: 3 <input type="text" name="nama3"><br>
        <input type="submit" value="Urutkan">
    </form>

    <?php
        error_reporting(0);
        $nama1 = $_POST["nama1"];
        $nama2 = $_POST["nama2"];
        $nama3 = $_POST["nama3"];

        if ($nama1<$nama2 && $nama1<$nama3 && $nama2<$nama3) {
            echo $nama1.'<br>';
            echo $nama2.'<br>';
            echo $nama3;
        }
        elseif ($nama1<$nama2 && $nama1<$nama3 && $nama2>$nama3) {
            echo $nama1.'<br>';
            echo $nama3.'<br>';
            echo $nama2;
        }
        elseif ($nama1>$nama2 && $nama1<$nama3 && $nama2<$nama3) {
            echo $nama2.'<br>';
            echo $nama1.'<br>';
            echo $nama3;
        }
        elseif ($nama1>$nama2 && $nama1>$nama3 && $nama2<$nama3) {
            echo $nama2.'<br>';
            echo $nama3.'<br>';
            echo $nama1;
        }
        elseif ($nama1>$nama2 && $nama1>$nama3 && $nama2>$nama3) {
            echo $nama3.'<br>';
            echo $nama2.'<br>';
            echo $nama1;
        }
        elseif ($nama1<$nama2 && $nama1>$nama3 && $nama2>$nama3) {
            echo $nama3.'<br>';
            echo $nama1.'<br>';
            echo $nama2;
        }
    ?>
</body>
</html>