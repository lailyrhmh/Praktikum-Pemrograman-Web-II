<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Batas Bawah : <input type = "text" name="bawah">
        <br>
        Batas Atas : <input type = "text" name="atas">
        <br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
        if(isset($_POST['submit']))    
        {
            $atas = $_POST ['atas'];
            $bawah = $_POST ['bawah'];
            $foto = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
            do {
                if (($bawah +7) %5 == 0 ) {
                    echo "<img src='$foto' width='20' height='20'>";
                } else {
                    echo "$bawah";
                } 
                $bawah++;           
            } while ($bawah <= $atas); 
        }
    ?>
</body>
</html>