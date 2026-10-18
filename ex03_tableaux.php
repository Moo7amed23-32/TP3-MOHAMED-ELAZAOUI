<?php
require_once 'config.php';


function mention($note) {
    if ($note >= 16) return "Très bien";
    elseif ($note >= 14) return "Bien";
    elseif ($note >= 12) return "Assez bien";
    elseif ($note >= SEUIL) return "Passable";
    else return "Ajourné";
}

$notes = [
    "Mohamed" => 16, "Ahmed" => 14, "Hind" => 13, "Aicha" => 15,
    "Samir" => 13, "Zakaria" => 13, "Rafik" => 10, "Ilham" => 9,
    "Hamza" => 7, "Sami" => 7, "Noura" => 14
];

// ===== 3.1 =====
echo "<h2>Exercice 3.1</h2>";
$modules = ["Algorithmique", "Web", "Bases de données"];

foreach ($modules as $m) {
    echo "$m<br>";
}
for ($i = 0; $i < count($modules); $i++) {
    echo "Module $i : $modules[$i]<br>";
}

// ===== 3.2 =====
echo "<h2>Exercice 3.2</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";
foreach ($notes as $nom => $note) {
    $style = ($note < SEUIL) ? " style='color:red'" : "";
    echo "<tr$style><td>$nom</td><td>$note</td><td>" . mention($note) . "</td></tr>";
}
echo "</table>";

// ===== 3.3 =====
echo "<h2>Exercice 3.3</h2>";

$somme = 0;



echo "Somme : " . array_sum($notes) . "<br>";
echo "Moyenne : " . round(array_sum($notes) / count($notes), 2) . "<br>";
echo "Max : " . max($notes) . "<br>";
echo "Min : " . min($notes) . "<br>";


$effectifs = [
    "Très bien" => 0, "Bien" => 0, "Assez bien" => 0,
    "Passable" => 0, "Ajourné" => 0
];
foreach ($notes as $note) {
    $effectifs[mention($note)]++;
}
print_r($effectifs);

// ===== 3.4 =====
echo "<h2>Exercice 3.4</h2>";

function afficher($tab) {
    foreach ($tab as $cle => $valeur) {
        echo "$cle : $valeur<br>";
    }
}

$t = $notes; ksort($t);
echo "<h3>Noms croissants (ksort)</h3>"; afficher($t);

$t = $notes; arsort($t);
echo "<h3>Notes décroissantes (arsort)</h3>"; afficher($t);

$t = $notes; krsort($t);
echo "<h3>Noms décroissants (krsort)</h3>"; afficher($t);

$t = $notes; asort($t);
echo "<h3>Notes croissantes (asort)</h3>"; afficher($t);


// ===== 3.5 =====
echo "<h2>Exercice 3.5</h2>";
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

echo "<pre>";
var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);
echo "</pre>";