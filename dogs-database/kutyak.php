<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kutyák</title>
</head>
<body>
    <?php 
    require_once("connect.php");
    $sql = "SELECT * FROM kutyafajta";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
    $counter = 1;

    echo"<table>";
    while($row = $stmt -> fetchObject()){
        echo"<tr>";
        echo"<td>$counter<td>";
        echo"<td>". $row -> nev ."<td>";
        echo"<td>". $row -> eredeti_nev ."<td>";
        echo"</tr>";
    }
    echo"<table>";
    ?>

</body>
</html>