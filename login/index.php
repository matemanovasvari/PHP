<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color: red; font-weight: bold; font-size: 150%;}
    </style>
</head>
<body>
    <h1>Belépés</h1>
    <h3>Nincs még fiókod? <a href="regisztracio.php">Itt</a> regisztrálhatsz.</h3>
    <?php
        if (!empty($_SESSION['loginError'])){
            echo "<p class='error'>" . $_SESSION['loginError'] . "</p>";
        }
    
    if (!empty($_SESSION['uId'])){
        
        echo "<p>Már korábban sikeresen beléptél!</p>";
        echo '<p> <a href="kilep.php"> Kilép </a> </p>';
    } 
    else
    {
    echo '<form action="belep.php" method="post">
        <input type="email" name="email" placeholder="cim@pelda.com">
        <input type="password" name="password" placeholder="Jelszó">
        <input type="submit" value="Login">
    </form>';
    }
    ?>
</body>
</html>