<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP vezérlési szerkezetek</title>
    <style>
        table,td{
            border: 1px, solid, black ;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    $szam = 5;
    if ($szam % 2 == 0) {
        echo "<p>Páros</p>";
    } else {
        echo "<p>Páratlan</p>";
    }
    if ($szam == 0) {
        echo "<p>nulla</p>";
    } elseif ($szam < 0) {
        echo "<p>negatív</p>";
    } else echo "<p>pozitív</p>";

    $jegy = 4;
    switch ($jegy) {
        case 1:
            echo "<p>elégtelen</p>";
            break;
        case 2:
            echo "<p>elégséges</p>";
            break;
        case 3:
            echo "<p>közepes</p>";
            break;
        case 4:
            echo "<p>jó</p>";
            break;
        case 5:
            echo "<p>jeles</p>";
            break;
        default:
            echo "<p>Helytelen adat!</p>";// elhagyható
    }

    $honapSorszama = 1;
    switch ($honapSorszama) {
        case 12:
        case 1:
        case 2:
            echo "<p>tél</p>";
            break;
        case 3:
        case 4:
        case 5:
            echo "<p>tavasz</p>";
            break;
        case 6:
        case 7:
        case 8:
            echo "<p>nyár</p>";
            break;
        case 9:
        case 10:
        case 11:
            echo "<p>ősz</p>";
            break;
    }

    echo "<table> <tr>";
    for ($i=1; $i < 11; $i++) { 
        echo "<td> {$i} <td>";
    }
    echo"</tr> </table>";

    echo "<table> <tr>";
    $j = 11;
    while($j<21)
    {
        echo "<td> {$j} <td>";
        $j++;
    }
    echo"</tr> </table>";

    echo "<table> <tr>";
    $k = 21;
    do
    {
        echo "<td> {$k} <td>";
        $k++;
    }while($k<31);
    echo"</tr> </table>";
//házi feladat/ főátló
    echo"<table>";
    for($i = 1; $i < 11; $i++)
    {
        echo "<tr>";
        for($j = 1; $j < 11; $j++)
        {
            $szam = $j * $i;
            
            if($i == $j)
            {
                echo"<td bgcolor = red> {$szam} </td>";
            }
            else
            {
                echo"<td > {$szam} </td>";
            }
        }
        echo "</tr>";
    }
    echo"</table>";

//mellékátló 2024.09.27
    echo"<table>";
    for($i = 1; $i < 11; $i++)
    {
        echo "<tr>";
        for($j = 1; $j < 11; $j++)
        {
            $szam = $j * $i;
            
            if($j + $i == 11)
            {
                echo"<td bgcolor = blue> {$szam} </td>";
            }
            else
            {
                echo"<td > {$szam} </td>";
            }
        }
        echo "</tr>";
    }
    echo"</table>";

    //piramis
    echo "";
    for ($i=0; $i < 11; $i++) { 
        echo "<p>";
        for ($j=10-$i; $j > 0; $j--) { 
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($k = 1; $k < $i*2; $k++) { 
            echo "&nbsp;a";
        }
        echo "</p>";
    }

    ?>
</body>

</html>