<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div{
        margin: 10px;
        border: 1px solid black;
        position: absolute;
    }
</style>
<body>
    <?php
    for($i = 5; $i >= 1; $i--){
        echo"<div width=$i*20px, height=$i*20px> </div>";
    }
    ?>
</body>
</html>