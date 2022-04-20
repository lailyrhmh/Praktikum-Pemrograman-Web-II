<?php

$data = array(
    array(
        "no" => "1",
        "nama" => "Ridho",
        "krs" => array(
            array(
                "mk" => "Pemrograman I",
                "sks" => 2
            ),
            array(
                "mk" => "Praktikum Pemrograman I",
                "sks" => 1
            ),
            array(
                "mk" => "Pengantar Lingkungan Lahan Basah",
                "sks" => 2
            ),
            array(
                "mk" => "Asitektur Komputer",
                "sks" => 3
            ),
        )
    ),
    array(
        "no" => "2",
        "nama" => "Ratna",
        "krs" => array(
            array(
                "mk" => "Basis Data I",
                "sks" => 2
            ),
            array(
                "mk" => "Praktikum Basis Data I",
                "sks" => 1
            ),
            array(
                "mk" => "Kalkulus",
                "sks" => 3
            ),
        )
    ), 
    array(
        "no" => "3",
        "nama" => "Tono",
        "krs" => array(
            array(
                "mk" => "Rekayasa Perangkat Lunak",
                "sks" => 3
            ),
            array(
                "mk" => "Analisis Perancangan Lunak",
                "sks" => 3
            ),
            array(
                "mk" => "Komputasi Awan",
                "sks" => 3
            ),
            array(
                "mk" => "Kecerdasan Bisnis",
                "sks" => 3
            ),
        )
    ),
);
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
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

        <?php
            for ($i=0; $i < count($data); $i++) { 
                $jum = 0;
                for ($j=0; $j < count($data[$i]["krs"]); $j++){
                    $jum += $data[$i]["krs"][$j]["sks"];
                }

                $data[$i]["jumSKS"] = $jum;
                
            }

            for ($i=0; $i < count($data); $i++) {
                for ($j=0; $j < count($data[$i]["krs"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$data[$i]["no"]."</td>";
                        echo "<td>".$data[$i]["nama"]."</td>";
                        echo "<td>".$data[$i]["krs"][$j]["mk"]."</td>";
                        echo "<td>".$data[$i]["krs"][$j]["sks"]."</td>";
                        echo "<td>".$data[$i]["jumSKS"]."</td>";
                        if ($data[$i]["jumSKS"] > 7) {
                            $data[$i]["ket"] = "Tidak Revisi";
                            echo "<td style = background-color:green>".$data[$i]["ket"]."</td>"; 
                        }else {
                            $data[$i]["ket"] = "Revisi KRS";
                            echo "<td style = background-color:red>".$data[$i]["ket"]."</td>"; 
                        }
                        
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$data[$i]["krs"][$j]["mk"]."</td>";
                        echo "<td>".$data[$i]["krs"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
            echo "</table>";
        ?>
    </table>
    </form>
</body>
</html>