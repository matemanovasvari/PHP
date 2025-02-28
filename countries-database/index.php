<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Földrészek</title>
</head>
<body>
    <?php
        require_once('connect.php');

        $sql = "SELECT * FROM foldreszek";
        $stmt = $connect -> prepare($sql);
        $formFoldresz = '<form action="fovaros.php" method="get"> <select name="kod">'; 
        try {
            $stmt -> execute();
            while ($row = $stmt -> fetchObject()){
                $formFoldresz .= '<option value="'. $row -> foldreszkod. '" >' .$row -> foldresznev.  '</option>'; 
            }
            $formFoldresz .= '</select> <input type="submit"> </form>';
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

        echo"<br>";

        $sql = "SELECT * FROM penznemek";
        $stmt = $connect -> prepare($sql);
        $formPenznem = '<form action="penznem.php" method="get"> <select name="kod">'; 
        try {
            $stmt -> execute();
            while ($row = $stmt -> fetchObject()){
                $formPenznem .= '<option value="'. $row -> penznemkod. '" >' .$row -> penznemnev.  '</option>'; 
            }
            $formPenznem .= '</select> <input type="submit"> </form>';
        }
        catch (PDOException $e){               
            echo $e -> getMessage();
        }
        echo $formPenznem;
    ?>
</body>
</html>