<?php

/**
 *
 */
$name = "Moussa";
if ($name === "Moussa"){ // le triple égale est un comparateur de manière stricte il vérifie de manière binaire
    echo "Je m'appelle " . $name. "\n";
}elseif ($name ===1){
   echo "Le chiffre est " . $name . "\n";
}
else {
    echo "pas de prénom " . "\n";
}

switch ($name){
    case 1:
        echo "Je m'appelle " . $name . "\n";
        break;
    case "Moussa":
        echo "Je m'appelle " . $name . "\n";
        break;
    default:
        echo "pas de prénom " . "\n";


}

