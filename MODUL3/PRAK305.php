<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak305</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input" id="">
        <input type="submit" name="submit" value="submit">

    </form>

    <?php
        $in = isset($_POST['input']) ? $_POST['input'] : null;

        $inLenght = strlen($in);

        $inUpper = strtoupper($in);

        $array = str_split($inUpper);

        if(isset($_POST['submit'])){
            echo "<h4>Input: </h4>".$in."<br>";
            echo "<h4>Output: </h4>";
    
            for ($i=0; $i<$inLenght; $i++){
                for ($j=0; $j<$inLenght; $j++){
                    if($i==0){
                        echo $array[$j];
                        for ($k=0; $k<$inLenght-1; $k++){
                            echo strtolower($array[$j]);
                        }
                    }
                }
            }
        }

    ?>
</body>
</html>