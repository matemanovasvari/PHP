<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function IsPolidrome($ertek){
            $ertek =  str_replace(".", "", $ertek);
            $ertek =  str_replace("?", "", $ertek);
            $ertek =  str_replace("!", "", $ertek);
            $ertek = strtolower($ertek);
            $ertekForditott = "";
            for($i = strlen($ertek) - 1; $i >= 0; $i--)
            {
                $ertekForditott .= $ertek[$i];
            }
            echo "<p>";
            if($ertek == $ertekForditott)
            {
                echo "A megadott szöveg palindrom";
            }
            else
            {
                echo "A megadott szöveg nem palindrom, az eredeti szöveg: $ertek; a megfordítása: $ertekForditott";
            }
            echo "</p>";
        };
        IsPolidrome("abba");
        IsPolidrome("A fasori pap papirosa fa.");
        IsPolidrome("görög");
    ?> 
</body>
</html>