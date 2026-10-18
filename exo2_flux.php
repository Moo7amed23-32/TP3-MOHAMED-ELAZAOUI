<?php
require_once 'config.php';

function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo mention(17) . "<br>";
$notes = [10 , 20 , 15 , 7 , 13];
foreach ($notes as $n) {
    echo "$n : " . mention($n) . "<br>";
}

echo"=================Exercice 2.2==================<br>";

$mois = date("m");
$mois = (int) date("m");
switch ($mois) {
    case 1:
        echo "Janvier";
        break;
    case 2:
        echo "Février";
        break;
    case 3:
        echo "Mars";
        break;
    case 4:
        echo "Avril";  
        break;
    case 5:
        echo "Mai";
        break;
    case 6:
        echo"Juin";
        break;
    case 7:
        echo"Juillet";
        break;
    case 8:
        echo"Aout";
        break;
    case 9:
        echo"septembre";
        break;
    case 10:
        echo"Octobre";
        break;
    case 11:
        echo"Novembre";
        break;   
    case 12:
        echo "Décembre";
        break;
    default:
        echo "Mois invalide";
}
//ce qui se passe sans break c'est que le switch vas jamais s'arreter
echo"=================Exercice 2.3==================<br>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}
$i = 1;
while (true) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;      
        case 10:
            echo "At 10; quitting<br>";
            break 2;
            
    }
    $i++;
}
