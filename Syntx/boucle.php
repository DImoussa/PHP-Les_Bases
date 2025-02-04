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

$tabChiffre =
    [0 => 12, 1 => 30, 2  => 23, 20 => "Moussa"];

foreach ($tabChiffre as $keyChiffre => $valueChiffre){
    echo "position = ". $keyChiffre . " valeur = " . $valueChiffre . "<br>";
}



foreach ($tabChiffre as $keyChiffre => $valueChiffre){
    if ($keyChiffre == 1){
        echo "La clé numéro". $keyChiffre . "correspond à la valeur" . $valueChiffre;
    }
}


$config = ['color' => "bleu", "connection"=> "ssh"];

echo $config["color"];//blue

$resulRequete = [
    4565 =>[
    "nom" =>"Benoit",
    "prenom" => "foujol",
    "identite" => [
        "cv" => '453543R53ALD4132',
        "ci" => '465Z36FG8H768543',
        "pc" => '4456Z54Z564HRE56'
    ],
    "age" => 46,
    "nationalité" => "fr"
        ],

    4566 =>[
    "nom" =>"Joe",
    "prenom" => "Beni",
    "identite" => [
        "cv" => '453543R53ALD4132',
        "ci" => '465Z36FG8H768543',
        "pc" => '4456Z54Z564HRE56'
    ],
    "age" => 46,
    "nationalité" => "fr"
        ]
];


//foreach ($resulRequete as $keyResult => $valueResult){
//     echo $resulRequete[$keyResult]["prenom"] . "<br>";
//}

$tabTypeCarte = [
    "PC" => "Permis de conduire",
    "CI" => "Carte d'identité",
    "CV" => "Carte Vitale"

];

foreach ($resulRequete as $keyResult => $valueResult){
    echo $valueResult["prenom"]. "à pour identité :". $resulRequete[$keyResult]["identite"]["cv"]. "<br>";
    //Syntrxvar_dump($valueResult);
    foreach ($valueResult["identite"] as $keyIdentite => $valueIdentite){

            echo "Avec comme clé : " . $tabTypeCarte[$keyIdentite] . " " . $valueIdentite . "<br>";


    }

}








