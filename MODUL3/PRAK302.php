<!DOCTYPE html>
<html>
    <head>
        <style> 
            img{
                width: 30px;
            }
            </style> 
    </head>
    <body>
        <form action = "" method = "post">
            <div>
                <label>Tinggi : </label>
                <input type = "text" name = "tinggi">
            </div>
            <div>
                <label>Alamat Gambar : </label>
                <input type = "url" name = "link">
            </div>
            <button type = "submit" name = "submit">Cetak</button><br>

            <?php
            {
                if(isset($_POST["submit"]))
                    {
                        $tinggi = $_POST['tinggi'];
                        $link = $_POST['link'];
                        $i = 0;
                        while($i < $tinggi)
                        {
                            $j = 0;
                            while($j <= $i)
                            {
                                echo "<img>";
                                $j++;
                            }
                            $j = $i;
                            while($j < $tinggi)
                            {
                                $image = $link;
                                $imageData = base64_encode(file_get_contents($image));
                                echo "<img src = '$link'>";
                                $j++;
                            }
                            $i++;
                            echo "<br>";
                        }
                    }
            }
            ?>
</form>
</body>
</html>