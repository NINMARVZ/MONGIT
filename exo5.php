<?php

$mois = array(

    1 => "Janvier",
    2 => "Février",
    3 => "Mars",
    4 => "Avril",
    5 => "Mai",
    6 => "Juin",
    7 => "Juillet",
    8 => "Août",
    9 => "Septembre",
    10 => "Octobre",
    11 => "Novembre",
    12 => "Décembre"
);

$jours = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" =>30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31, 
);

foreach ($jours as $value => $key){
echo ('<br>'.$value.' => '.$key);
}

?>
