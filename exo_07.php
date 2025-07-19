<?php
$fruits = [
    "pomme" => 10,
    "banane" => 20,
    "orange" => 30,
    "mangue" => 20,
];
function mettreAJourStock($produits, $produit, $quantite){//d'abord je donne les parametres de ma fonction
    if (isset($produits[$produit])){//si la varible ou le produit existe dans le tableau alors
        $nouvel_variable = $produits[$produit] + $quantite;//on le mets a jour en ajoutant le nbr de quantite  mise en paramettre 
        $produits[$produit]=$nouvel_variable;//j'ai definie la mise a jour a ma variable

        //si le produit exite et que on na fait la mis a jour on montre l'ensemble des produit
        foreach ($produits as $valeur => $cle){
        echo $valeur." = ".$cle." <br> ";
        }
    }
    else{
        echo " le produit n'existe pas dans votre base ";
    }
}
echo mettreAJourStock($fruits , "pomme" ,10);
