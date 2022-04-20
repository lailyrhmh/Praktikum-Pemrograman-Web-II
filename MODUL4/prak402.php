<?php

    $data = array(
        array(
            "nama" => "Andi",
            "nim" => "2101001",
            "uts" => 87,
            "uas" => 65
        ),
        array(
            "nama" => "Bodi",
            "nim" => "2101002",
            "uts" => 76,
            "uas" => 79
        ),
        array(
            "nama" => "Tono",
            "nim" => "2101003",
            "uts" => 50,
            "uas" => 41
        ),
        array(
            "nama" => "Bobi",
            "nim" => "2101004",
            "uts" => 60,
            "uas" => 75
        ),
    );

    //data[0]["final"] = 56;

    for($i=0;$i<count($data);$i++){
        $data[$i]["final"] = $data[$i]["uts"]*0.4 + $data[$i]["uas"]*0.6;
        if ($data[$i]["final"] >= 80){
            $data[$i]["huruf"] = "A";
        }
        else if ($data[$i]["final"] >= 70){
            $data[$i]["huruf"] = "B";
        }
        else if ($data[$i]["final"] >= 60){
            $data[$i]["huruf"] = "C";
        }
        else if ($data[$i]["final"] >= 50){
            $data[$i]["huruf"] = "D";
        }
        else if ($data[$i]["final"] < 50){
            $data[$i]["huruf"] = "E";
        }
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
        table, th, td {
            padding: 5px;
            border: solid 0.1px black;
            border-collapse: collapse;
        }

        th {
            background-color: #a4a4a4;
        }
    </style>
</head>
<body>
    <form action="" method="post">

    <?php
        echo "<table>";
        echo "<tr>";
        echo "<th>Nama</th>";
        echo "<th>NIM</th>";
        echo "<th>Nilai UTS</th>";
        echo "<th>Nilai UAS</th>";
        echo "<th>Nilai Akhir</th>";
        echo "<th>Huruf</th>";
        echo "</tr>";

        for($j=0;$j<count($data);$j++){
            echo "<tr>";
            echo "<td>".$data[$j]["nama"]."</td>";
            echo "<td>".$data[$j]["nim"]."</td>";
            echo "<td>".$data[$j]["uts"]."</td>";
            echo "<td>".$data[$j]["uas"]."</td>";
            echo "<td>".$data[$j]["final"]."</td>";
            echo "<td>".$data[$j]["huruf"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
    </form>
</body>
</html>