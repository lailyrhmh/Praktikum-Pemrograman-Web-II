<!DOCTYPE html>
<html>
    <head>
        <title>PRAK301</title>
    </head>
    <body>
        <form action="" method="POST">
            Jumlah Peserta : 
            <input type="number" name="jumlah" value="<?=isset($_POST['jumlah']) ? $_POST['jumlah'] : ''?>"/><br>
            <input type="submit" name="submit" value="Cetak"><br><br>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $jumlah = $_POST["jumlah"];
            $i=1;
            while($i<=$jumlah){
                if(($i%2)==0){
                    echo"<font color='green'><font size='5'><b>Peserta ke-$i<br><br>";  
                }else{
                    echo"<font color='red'><font size='5'><b>Peserta ke-$i<br><br>";
                }
                $i++;
            }
        }
        ?>
    </body>
</html>