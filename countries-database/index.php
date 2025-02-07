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
        $formFoldresz = '<form action="fovaros.php" method="get"> <select name="kod">'; 
        try {
            $stmt -> execute();     //Lekérdezés végrehajtása
            while ($row = $stmt -> fetchObject()){      //Lekérdezés eredményének sorokra bontása.
                $formFoldresz .= '<option value="'. $row -> foldreszkod. '" >' .$row -> foldresznev.  '</option>'; 
                //select elemben az option tag-ek létrehozása.
            }
            $formFoldresz .= '</select> <input type="submit"> </form>';     //Select lezárása, gomb létrehozása
        }
        catch (PDOException $e){               
            echo $e -> getMessage();
        }
        echo $formFoldresz;

        echo"<br>";

        $sql = "SELECT * FROM allamformak";
        $stmt = $connect -> prepare($sql);
        $formAllamforma = '<form action="allamforma.php" method="get"> <select name="kod">'; 
        try {
            $stmt -> execute();
            while ($row = $stmt -> fetchObject()){
                $formAllamforma .= '<option value="'. $row -> allamformakod. '" >' .$row -> allamformanev.  '</option>'; 
            }
            $formAllamforma .= '</select> <input type="submit"> </form>';
        }
        catch (PDOException $e){               
            echo $e -> getMessage();
        }
        echo $formAllamforma;
    ?>
</body>
</html>