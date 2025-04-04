<?php
require_once('connect.php');
if (isset($_SESSION['loginError']))
{
    unset($_SESSION['loginError']);
}
if (!empty($_POST['email']) && !empty($_POST['password'])){
    $email = htmlspecialchars(trim($_POST['email']));
    $pwd = htmlspecialchars(trim($_POST['password']));
    $sql = "SELECT * FROM felhasznalok WHERE jelszo = '$pwd' AND email = '$email';";
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    if ($stmt -> rowCount() == 1){
        //Helyesek voltak a belépési adatok
        $rekord = $stmt -> fetchObject();
        echo "<p> {$rekord -> nev} </p>";
        echo '<a href="index.php"> Vissza </a>';
        echo '<p> <a href="kilep.php"> Kilép </a> </p>';
        $_SESSION['uId'] = $rekord -> azon; //Regisztráltam a felhasználó azonosítóját a munkamenetben
        
    }else{
        //Helytelen belépési adatokat adtak meg!
        $_SESSION['loginError'] = "Helytelen felhasználónév vagy jelszó!";
        header("Location: index.php");
    }
}else{
    //Helytelen kérés történt, akár post helyett pl. get stb.
    $_SESSION['loginError'] = "Helytelen kérés!";
    http_response_code(400);
    header("Location: index.php");
}