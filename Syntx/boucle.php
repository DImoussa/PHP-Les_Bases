<?php
//WHILE
$result = 10;

while ($result <= 20){
    echo $result . "<br>";
    $result ++;
}

//DO WHILE
// attention result démarre à 20 suite à l'incrémentation du while
do {
    echo $result . "<br>";
    $result ++;
}while($result <= 30);



//FOR
//3 Param (init;condition;incrémentation)
for ($result =0; $result < 30; $result++){
    echo $result . "<br>";

}


//FOREACH

$tabChiffre = [0 => 12, 1=> 30, 2=> 23, 20 => "Moussa"];
foreach ($tabChiffre as $keyChiffre => $valueChiffre){
    echo "position = ". $keyChiffre . " valeur = " . $valueChiffre . "<br>";
}


