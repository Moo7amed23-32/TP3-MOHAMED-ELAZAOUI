<?php echo 'Hello PHP<br>';
// commentaire sur une seul ligne methode une //
## commentaire sur une seul ligne methode deux ##
/*
commentaire sur plusieurs lignes 
*/
require 'config.php';

echo "$const<br>";
defined("SEUIL");
defined("INCONNUE");
echo "SEUIL<br>";
// echo INCONNUE;
/*Si on affiche une constante qui n'existe pas, on obtient une erreur de type "Notice" et la valeur affichée est le nom de la constante.
La difference entre 'const' et 'define() c'est que les deux on peu pas les modifier , mais la particuliarite c'est que qu'on utilise define sous condition  */


$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);
echo "Le prix TTC du produit est de $prix_ttc €.<br>";

$test = 42;
$test = (string) $test;
var_dump($test);


$dec = 255;
$hex = 0xFF;
$oct = 0377;
$bin = 0b11111111;

echo "$dec $hex $oct $bin<br>";


$traitees = "égales à";
$ici = 2;
echo "Ahmed a dit : \"J'ai réussi\"<br>";
echo 'Voulez-vous supprimer C:\*.*?<br>';
$texte = trim("*Bonjour les développeurs*", "*");
for ($i = 0; $i < strlen($texte); $i++) {
    echo $texte[$i] . "<br>";
}
?>

