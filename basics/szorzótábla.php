<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        width: 25px;
        height: 25px;
        text-align: center;
    }
</style>
<body>
    <?php
        echo"<table>";
        for($i = 1; $i < 11; $i++){
            echo"<tr>";
            for($j = 1; $j < 11; $j++){
                $sum = $i * $j;
                echo"<td>$sum</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
    ?>
</body>
</html>