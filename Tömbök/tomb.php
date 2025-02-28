<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömbök</title>
</head>
<body>
    <?php
        $arr = array(); //üres
        $arr2 = [];
        var_dump($arr2);
        
        array_push($arr, 1);
        array_unshift($arr, 2);
        array_push($arr, 4,5);
        array_push($arr, [8,10]);
        var_dump($arr);
        for ($i=0; $i < count($arr); $i++) { //count = sizeof: tömb méretének lekérdezése
            
             if (is_array($arr[$i])){
                echo "<p>";
                foreach ($arr[$i] as $num){
                    echo "<span> {$num} </span>; ";  
                }
                echo "</p>";
             }
             else echo "<p> {$arr[$i]} </p>";
        }
        $auto = ["gyártó" => "Mazda", "év" => "2003", "szín" => "piros"];
        foreach ($auto as $k => $v){
           echo "<p>{$k}: {$v}</p>"; 
        }
        var_dump(array_keys($auto));
    ?>
</body>
</html>