<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $szorzat = 0;
    for ($i = 1; $i<11; $i++)
    {
        for($j = 1; $j< 11; $j++)
        {
            $szorzat = $i*$j;
            echo "<p><span>{$i} * {$j} = {$szorzat}</span></p>";
            
        }
        echo "________";
    }
    ?>
</body>
</html>