<?php
$host = 'localhost';    //Adatbázis szerver címe, localhost = 127.0.0.1
$user = 'root';         //Ezzel a felhasználóval csatlakozunk az adatbázishoz.
$pwd = '';              //A root felhasználó jelszava.
$dbname = 'orszagok';   //Adatbázis, melyhez csatlakozunk.
$connect = null;
try{
    $connect = new PDO("mysql:host=$host;dbname=$dbname;port=3306", $user, $pwd);   //Megadtuk a portszámot is a csatlakozsákor, formailag agy kell megadni.
}catch (PDOException $e){   //Hiba esetén elkapjuk a kivételt.
    echo $e -> getMessage();    //Kiírjuk a hibához tartozó hibát.
}