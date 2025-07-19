<?php
$note = 22;
if($note >20){
    echo "veuillez entre une valeur inferieur ou egale a 20 svp";
}else{
    echo 'la $note : '.$note.' est ';
    if($note >= 16){
    echo "Exellent";
}
elseif($note >=12 && $note <= 15){
    echo "Bien ";
}
elseif($note >=10 && $note <= 11){
    echo "Moyen";
}
else{
    echo "insuffisant";
}
}