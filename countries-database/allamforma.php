<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fővárosok</title>
</head>
<body>
    <h1>Országok</h1>
    <table>
        <tr>
            <th>Ország</th>
            <th>Főváros</th>
        </tr>
    <?php
        require_once('connect.php');
        if (isset($_GET['kod'])){
            $fkod = $_GET['kod'];
            $sql = "SELECT onev as orszag, fovaros FROM orszagok WHERE allamkod = $fkod;";
            try{
                $stmt = $connect -> prepare($sql);
                $stmt -> execute();
                while($row = $stmt -> fetchObject()){
                    echo"<tr> <td>{$row -> orszag}</td> <td>{$row -> fovaros}</td> </tr>";
                }
            }
            catch(PDOException $ex){
                echo $ex -> getMessage();
            }
        }
    ?>
    </table>
</body>
</html>