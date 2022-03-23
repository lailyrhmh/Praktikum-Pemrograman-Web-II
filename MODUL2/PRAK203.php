<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak203</title>
</head>
<body>
    <form action="" method="post">
        Nilai : <input type="text" name="value" required>
        <br>
        Dari : <br>
        <input type="radio" name="from" value="c"><label for="c">Celcius</label> <br>
        <input type="radio" name="from" value="f"><label for="f">Fahrenheit</label> <br>
        <input type="radio" name="from" value="r"><label for="r">Rheamur</label> <br>
        <input type="radio" name="from" value="k"><label for="k">Kelvin</label> <br>

        Ke : <br>
        <input type="radio" name="to" value="c"><label for="c">Celcius</label> <br>
        <input type="radio" name="to" value="f"><label for="f">Fahrenheit</label> <br>
        <input type="radio" name="to" value="r"><label for="r">Rheamur</label> <br>
        <input type="radio" name="to" value="k"><label for="k">Kelvin</label> <br>

        <input type="submit" value="Konversi">
    </form>

    <?php
        error_reporting(0);
        $value = $_POST["value"];
        $from = $_POST["from"];
        $to = $_POST["to"];

        if ($from == $to){
            if ($to=="c") {
                echo "<h3>Hasil Konversi : $value&deg;C</h3>";
            } elseif ($to=="f") {
                echo "<h3>Hasil Konversi : $value&deg;F</h3>";
            } elseif ($to=="r") {
                echo "<h3>Hasil Konversi : $value&deg;R</h3>";
            } elseif ($to=="k") {
                echo "<h3>Hasil Konversi : $value&deg;K</h3>";
            }
        }
        else{
            if ($to=="c") {
                if ($from=="f") {
                    $value = (5/9)*($value-32);
                } elseif ($from=="r") {
                    $value = (5/4)*$value;
                } elseif ($from=="k") {
                    $value = $value-273;
                }
                $unit = "C";
            } elseif ($to=="f") {
                if ($from=="c") {
                    $value = (9/5)*$value+32;
                } elseif ($from=="r") {
                    $value = (9/4)*$value+32;
                } elseif ($from=="k") {
                    $value = (9/5)*($value-273)+32;
                }
                $unit = "F";
            } elseif ($to=="r") {
                if ($from=="c") {
                    $value = (4/5)*$value;
                } elseif ($from=="f") {
                    $value = (4/9)*($value-32);
                } elseif ($from=="k") {
                    $value = (4/5)*($value-273);
                }
                $unit = "R";
            } elseif ($to=="k") {
                if ($from=="c") {
                    $value = $value+273;
                } elseif ($from=="f") {
                    $value = (5/9)*($value-32)+273;
                } elseif ($from=="r") {
                    $value = (5/4)*$value+273;
                }
                $unit = "K";
            }
            echo "<h3>Hasil Konversi : ".number_format($value,2)."&deg;$unit</h3>";
        }
    ?>
</body>
</html>