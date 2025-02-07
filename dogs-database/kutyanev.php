<?php
    require_once('connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["nev"])){
        $nev = trim($_GET['nev']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "get" action="kutyanev.php">
    <?php
        require_once('connect.php');
        $sql = "SELECT * FROM kutyanev WHERE kutyanev LIKE \"A%\";";
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();

        echo"<select>";
        while($row = $stmt -> fetchObject()){
            echo"<option>". $row -> kutyanev ."</option>";
            $counter++;
        }
        echo"</select>";
    ?>
</body>
</html>