<?php
$fruits = [
    "pomme" => 10,
    "banane" => 20,
    "orange" => 30,
    "mangue" => 20,
];
echo $fruits["pomme"] + 10;
function ajouterUn(&$nombre) {//Sans le &, $x serait toujours 5 après la fonction. Le & permet de modifier $x à l’intérieur de la fonction.
    $nombre += 1;
}

$x = 5;
ajouterUn($x);

echo $x; // Résultat : 6
