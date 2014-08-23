<?php
session_start();

include('controller/config.php');

include ('controller/about-us/about-us.php');





include('model/ajoute_location.php');
//var_dump(ajoute_location('DE', 'country', 'Allemagne'));



// nom simple -> 4
// nom reel : -> 5
// code postale -> 8
// population : -> 15
/*
$array = [];


$file = fopen("model/ville/villes_france.csv","r");
while(! feof($file)){
    $ligne = fgetcsv($file);
    if($ligne[15] > 25000){
        $array[$ligne[4]] = [$ligne[4] ,$ligne[5],$ligne[8],$ligne[15]];
    }

}
fclose($file);
ksort($array);

$new_file = fopen("model/ville/triee_par_nom/france.csv","r+");
foreach ($array as $key => $val) {
    fputcsv($new_file, $val);
}
fclose($new_file);












