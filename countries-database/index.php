<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Földrészek</title>
</head>
<body>
    <?php
        require_once('connect.php');    //Beemeljük a connect.php fájlban található kódot.
        $sql = "SELECT * FROM foldreszek";  //Földrészek tábla minden adatának lekérdezése.
        $stmt = $connect -> prepare($sql);  //Lekérdezés előkészítése
        $form = '<form action="fovaros.php" method="get"> <select name="kod">'; 
        try {
            $stmt -> execute();     //Lekérdezés végrehajtása
            while ($row = $stmt -> fetchObject()){      //Lekérdezés eredményének sorokra bontása.
                $form .= '<option value="'. $row -> foldreszkod. '" >' .$row -> foldresznev.  '</option>'; 
                //select elemben az option tag-ek létrehozása.
            }
            $form .= '</select> <input type="submit"> </form>';     //Select lezárása, gomb létrehozása
        }
        catch (PDOException $e){               
            echo $e -> getMessage();
        }
        echo $form; //Űrlap lezárása.
    ?>
</body>
</html>