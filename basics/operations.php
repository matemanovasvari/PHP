<?php
$valtozo = 0;
echo $valtozo;
echo "<br>";
print($valtozo);
echo "<p>" . $valtozo . "</p>";
echo "<p>$valtozo</p>";

$szam1 = 5;
$szam2 = 3;

$eredmeny = $szam1 + $szam2;
echo "<p>$szam1 + $szam2 = $eredmeny</p>";

$eredmeny = $szam1 - $szam2;
echo "<p>$szam1 - $szam2 = $eredmeny</p>";

$eredmeny = $szam1 * $szam2;
echo "<p>$szam1 * $szam2 = $eredmeny</p>";

$eredmeny = $szam1 / $szam2;
echo "<p>$szam1 / $szam2 = $eredmeny</p>";

$eredmeny = $szam1 % $szam2;
echo "<p>$szam1 % $szam2 = $eredmeny</p>";

$eredmeny = $szam1 ** $szam2;
echo "<p>$szam1 ** $szam2 = $eredmeny</p>";

$valosSzam = 2.839;

echo "<p>$valosSzam</p>";

$eredmeny = ceil($valosSzam);
echo "<p>: $eredmeny</p>";

$eredmeny = floor($valosSzam);
echo "<p>floor: $eredmeny</p>";

$eredmeny = round($valosSzam);
echo "<p>round: $eredmeny</p>";

$eredmeny = round($valosSzam)%2 == 0 ? "páros" : "páratlan";
echo "<p>$valosSzam $eredmeny</p>";