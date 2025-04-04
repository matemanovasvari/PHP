<?php
session_start();
session_destroy();  //Munkamanet törlése, minden adat!
header('Location: index.php'); //Átirányítás a kezdőlapra