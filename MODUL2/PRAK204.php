<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak2</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="text" name="value"><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST["konversi"])) {
        $value = $_POST["value"];

        if ($value>=0 && $value<1000) {
            echo "<h3>Hasil: ";
            if ($value==0) {
                echo "Nol";
            } elseif ($value>=1 && $value<10) {
                echo "Satuan";
            } elseif ($value>=20 && $value<100) {
                echo "Puluhan";
            } elseif ($value>=11 && $value<20) {
                echo "Belasan";
            } elseif ($value>=100 && $value<1000) {
                echo "Ratusan";
            } else {
                echo "Puluhan";
            }
            
        } elseif ($value>=1000) {
            echo "Anda Menginput Melebihi Limit Bilangan";
        } else{
            echo "Input Salah</h3>";
        }
    }

    ?>
</body>
</html>