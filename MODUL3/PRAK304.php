<?php
    $bintang = 0;
    if(isset($_POST['bintang'])){
        $bintang = $_POST['bintang'];
    }

    if(isset($_POST['tambah'])){
        $bintang++;
    }
    elseif(isset($_POST['kurang'])){
        $bintang--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 60px;
        }
    </style>
</head>
<body>
    <?php 
    if($bintang==0): ?>

    <form action="" method="post">
        Jumlah Bintang 
        <input type="number" name="bintang"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    endif;



    if($bintang!=0): 
    echo "Jumlah bintang $bintang <br><br>";
    for ($i=0; $i<$bintang; $i++){
        echo "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png'>";
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="bintang" value="<?= $bintang; ?>">
        <input type="submit" name="tambah" value="Tambah">
        <input type="submit" name="kurang" value="Kurang">
    </form>
    
    <?php
    endif;?>
</body>
</html>