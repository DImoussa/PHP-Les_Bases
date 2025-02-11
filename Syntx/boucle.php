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
        echo "La clé numéro". $keyChiffre . "correspond à la valeur" . $valueChiffre . "<br>";
    }
}


$config = ['color' => "bleu", "connection"=> "ssh"];

echo $config["color"]. "<br>";//blue

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

    ];
$tabTypeCarte = [
    "cv" => "Carte Vitale",
    "ci" => "Carte d'identité",
    "pc" => "Permis de conduire"

];
foreach ($resulRequete as $KeyRequet => $valueRequet){
    echo "Son nom est ". $valueRequet["nom"]. " et son prénom ". $valueRequet["prenom"].  "<br>";
    echo " il possède les identié suivante " ."<br>";
    foreach ($valueRequet["identite"] as $keyidentite => $valIdentite){
        echo  $tabTypeCarte[$keyidentite] ." :". $valIdentite ."<br>";
    }
}

    /*4566 =>[
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
];*/









