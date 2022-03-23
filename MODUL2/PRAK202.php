<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prak202</title>
    <style>
        text {
            color: red
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Nama: <input type="text" name="name" required 
        value=<?php error_reporting(0); $name = $_POST["name"];?>>
        <text>*</text>
        <br>
        Nim: <input type="text" name="nim" required
        value=<?php error_reporting(0); $name = $_POST["nim"];?>>
        <text>*</text>
        <br>
        Jenis Kelamin : <text>*</text>
        <br>
        <input type="radio" name="gender" id="l" required> 
        <label for="l">Laki-laki <br></label>
        <input type="radio" name="gender" id="p">
        <label for="p">Perempuan <br></label>
        <input type="submit" value="Submit">
    </form>

    <?php
        error_reporting(0);

        $name = $_POST["name"];
        $nim = $_POST["nim"];
        $gender = $_POST["gender"];

        echo "<h1>Output</h1>";
        echo $name.'<br>';
        echo $nim.'<br>';
        echo $gender.'<br>';
    ?>
</body>
</html>