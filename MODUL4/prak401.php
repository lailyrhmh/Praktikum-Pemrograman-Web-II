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
        Panjang: <input type="number" name="panjang" id=""> <br>
        Lebar: <input type="number" name="lebar" id=""> <br>
        Nilai: <input type="text" name="nilai" id=""> <br>
        <input type="submit" name="cetak" value="Cetak"> <br>
    </form>

<?php
    if(isset($_POST['cetak'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $masukan = $_POST['nilai'];

        $matrix = $panjang*$lebar;

        $nilai = explode(" ", $masukan);
        if(count($nilai)==$matrix){
            $new = array_chunk($nilai, $lebar);
    
            echo "<table border=1 cellspacing=0>";
            for($i=0;$i<$panjang;$i++){
                echo"<tr>";
                for($j=0;$j<$lebar;$j++){
                    echo "<td width=40 height=40>" . $new[$i][$j] . "</td>";
                }
                echo"</tr>";
            }
            echo "</table>";
        }
        else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
?>

</body>
</html>