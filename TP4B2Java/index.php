<?php

//Le TP4 Java traduis en php (entraianement)



include ("Agent.php");
include ("Client.php");
include ("Releve.php");



$agent1 = new Agent(1,"Enzo");
$agent2 = new Agent(2,"Noa");
$agent3 = new Agent(3,"Lilou");

$agents = [$agent1, $agent2, $agent3];

echo "Liste des Agents \n";

foreach ($agents as $agent) {
    echo $agent->getIdAgent() ."  ". $agent->getNomAgent(). " \n";
}


$client1 = new Client(1,"Martin");
$client2 = new Client(2,"Alison");
$client3 = new Client(3,"Gand");
$client4 = new Client(4,"Muller");
$client5 = new Client(5,"Fortin");
$client6 = new Client(6,"Garnier");
$client7 = new Client(7,"Cousinot");

$agent1->ajouterClients($client1);
$agent1->ajouterClients($client2);
$agent1->ajouterClients($client3);
$agent2->ajouterClients($client4);
$agent3->ajouterClients($client5);
$agent3->ajouterClients($client6);
$agent3->ajouterClients($client7);


$releve1 = new Releve("14/02/2024",345);
$releve2 = new Releve("21/07/2024",987);
$releve3 = new Releve("05/11/2024",1117);
$releve4 = new Releve("15/08/2024",546);
$releve5 = new Releve("05/11/2024",261);
$releve6 = new Releve("12/26/2024",783);
$releve7 = new Releve("02/30/2024",904);
$releve8 = new Releve("01/12/2024",1283);
$releve9 = new Releve("07/26/2024",1846);
$releve10 = new Releve("06/21/2024",371);
$releve11 = new Releve("11/01/2024",613);
$releve12 = new Releve("08/19/2024",1071);
$releve13 = new Releve("03/17/2024",14);

$client1->ajouterReleves($releve1);
$client1->ajouterReleves($releve2);
$client1->ajouterReleves($releve3);
$client2->ajouterReleves($releve4);
$client3->ajouterReleves($releve5);
$client3->ajouterReleves($releve6);
$client4->ajouterReleves($releve7);
$client4->ajouterReleves($releve8);
$client4->ajouterReleves($releve9);
$client5->ajouterReleves($releve10);
$client5->ajouterReleves($releve11);
$client5->ajouterReleves($releve12);
$client6->ajouterReleves($releve13);




echo "\n Liste des agents et leur clients \n";

foreach ($agents as $agent) {
    echo $agent->getIdAgent() ." ". $agent->getNomAgent(). " ";
    echo"Avec pour Clients : ". "\n";
    foreach ($agent->getClients() as $client) {
       echo $client->getNomclient()." - "."\n";
    }

}


echo "\n Liste des agents et leur clients + leurs releves \n";

foreach ($agents as $agent) {
    echo $agent->getIdAgent() ." ".
         $agent->getNomAgent(). " ";
    echo"Avec pour Clients : ". "\n";
    foreach ($agent->getClients() as $client) {
        echo $client->getNomclient()." - ";
        echo "Avec comme releves : ". "\n";
        foreach ($client->getReleves() as $releve) {
            echo $releve->getDateReleve()." - ";
            echo $releve->getValueReleve() . "\n";

        }

    }
}