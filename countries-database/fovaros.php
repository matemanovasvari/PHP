<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fővárosok</title>
</head>
<body>
    <h1>Fővárosok</h1>
    <?php
                
        if (isset($_GET['kod'])){   //Megvizsgáljuk, hogy a $_GET super globális asszociatív tömbben létezik-e a 'kod' kulcs?
            echo $_GET['kod'];      //Kiírjuk az előző oldalon kiválasztott foldrészhez az adatbázisban tárolt 'foldreszkod'-ot.
        }
        else{
            echo 'Nem érkezett adat';   //Pl. Nem GET típusú volt a kérés.
        }
    ?>
</body>
</html>