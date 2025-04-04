<?php
require_once('connect.php');

if(!empty($_POST['email'] && $_POST['password'])){
    $email = htmlspecialchars(trim($_POST['email']));
    $pwd = htmlspecialchars(trim($_POST['password']));
    $sql = "SELECT * FROM felhasznalok WHERE jelszo = '$pwd' AND email = '$email';";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();

    if($stmt -> rowCount() == 1){
        $rekord = $stmt -> fetchObject();
        echo"<p> {$rekord -> $nev} </p>";
    }
    else{
        header("Location: index.html");
    }
}
else{
    header("Location: index.html");
}

?>