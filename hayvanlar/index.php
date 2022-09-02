<?php

require_once realpath("vendor/autoload.php");

$atlar = new \MyApp\Zoo\Atlar("At", 80, 3);

echo $atlar->getAlbuterol()
    ->getDiazepam()
    ->getDosage();
echo $atlar->getFeedSchedule(3);

echo "<hr>";


$zepralar = new \MyApp\Zoo\Atlar("Zepra", 65, 2);

echo $zepralar->getAlbuterol()
    ->getDiazepam()
    ->getFluphenazine()
    ->getLidocaine()
    ->getDosage();

echo $zepralar->getFeedSchedule(5);

echo "<hr>";

$esekler = new \MyApp\Zoo\Atlar("Eşekler", 40, 15);

echo $esekler->getDosage();
echo $esekler->getFeedSchedule(4);

