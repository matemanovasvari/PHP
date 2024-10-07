<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-100 sum</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        echo"<table>";
        $sum = 0;

        for($i = 1; $i <= 100; $i++){
            echo"<tr>";
            echo"<td> $i </td>";
            $sum += $i;
            echo"<td> $sum </td>";
            echo"</tr>";
        }

        echo"</table>"
    ?>
</body>
</html>