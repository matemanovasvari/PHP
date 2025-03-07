<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form kezelése</title>
</head>
<style>
    *{
        text-align: center;
    }

    .body{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .error{
        color: red;
    }

    fieldset{
        width: 10%;
    }


</style>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="nev" placeholder="Teszt Elek"><br>
    
        <input type="password" name="password" placeholder="Jelszó"><br>
        <fieldset>
            <legend>Neme: </legend>
            <p>Attack helicopter<input type="radio" name="neme" value="Attack helicopter"></p>
            <p>Panzerkampfwagen<input type="radio" name="neme" value="Panzerkampfwagen"></p>
        </fieldset><br>

        <input type="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['nev'],$_POST['neme'],$_POST['password'])){
            echo $_POST['nev'].'<br>';
            echo $_POST['neme'].'<br>';
            echo $_POST['password'].'<br>';
        }
        else{
            echo `<p class="error">There are missing datas</p>`;
        }
    ?>
</body>
</html>