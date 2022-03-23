<html>
    <head>
        <title>Praktikum 1</title>
        <style>
            table, tr, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
            $listHP = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5")
        ?>

        <table>
            <tr>
                <td><b>Daftar Smartphone Samsung</b></td>
            </tr>
            <?php
                foreach ($listHP as $samsung){
                    echo "<tr><td>$samsung</td></tr>";
                }
            ?>
        </table>
    </body>
</html>