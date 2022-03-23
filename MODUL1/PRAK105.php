<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
        <style>
            th {
                background: red;
                cellpadding: 10px;
            }
            table, th, td{
                border: 1px solid black;
            }
        </style>
</head>
<body>
    <?php
        $listHP = array('samsung1' => "Samsung Galaxy S22", 'samsung2' =>  "Samsung Galaxy S22+", 'samsung3' => "Samsung Galaxy A03", 'samsung4' => "Samsung Galaxy Xcover 5");
    ?>

    <table>
        <tr>
            <th><h2>Daftar Smartphone Samsung</h2></th>
        </tr>
        <?php
            foreach ($listHP as $samsung){
                echo "<tr><td>$samsung</td></tr>";
            }
        ?>
    </table>
</body>
</html>