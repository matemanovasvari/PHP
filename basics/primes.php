<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $szamlalo =0;
    echo"<ol>";
        for($i = 1; $i < 50; $i++)
        {
            for($j = 1; $j <= $i; $j++)
            {
                if($i % $j == 0){
                    $szamlalo++;
                }
            }

            if($szamlalo == 2)
            {
                echo"<li>{$i}</li>";
            }

            $szamlalo = 0;
        }
    echo" </ol>"
    ?>
</body>
</html>