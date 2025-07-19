<?php
function analyserNotes($tab){
    foreach($tab as $element){
        if($element > 20){
            echo $element." est une notre supperieur a 20 veuillez entre un note inferieur ou egale a 20";
        }else{
            if($element >= 16){
            echo $element." "."c'est une Exellent note"."<br>";
        }
        elseif($element >=12 && $element <= 15){
            echo $element." "."c'est Bien "."<br>";
        }
        elseif($element>=10 && $element <= 11){
            echo $element." "." c'est une note Moyenne "."<br>";
        }
        else{
            echo $element." "."c'est une note insuffisant"."<br>";
        }
        }
    }
    "    ";
    " <br> <br> ";
    $moyenne = array_sum($tab) / count($tab);
    echo "votre moyenne a partie de ses differents note est " .$moyenne;
}
analyserNotes([8,13,10,16,18]);