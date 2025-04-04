<?php
session_start();    //Munkamenet követésének indítása
$host = 'localhost';
$user = 'root';
$pwd = '';
$dbName = 'belep';

try{
    $connect = new PDO("mysql:host=$host;dbname=$dbName;port=3306", $user, $pwd);
}catch (PDOException $e){
    $e -> getMessage();
}