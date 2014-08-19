<?php

$lettreTape = $_POST['lieu'];

$results = array();
$file = fopen("../../model/ville/triee_par_nom/france.csv","r");
while(! feof($file)){
    $ligne = fgetcsv($file);
    if (stripos($ligne[0], $lettreTape) === 0 || stripos($ligne[1], $lettreTape) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
        if ($ligne[1] == 'Paris')$results[$ligne[3]] = $ligne[1] . '  (75000)';
        else $results[$ligne[3]] = $ligne[1] . '  ('. $ligne[2] . ')';
    }
}
fclose($file);

//trié par population
krsort($results);


$results_finaux = array();

// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats

$i = 0;
$resultsLen = count($results);
foreach($results as $value){
    if($i >= 10){
        continue;
    }
    $results_finaux[] = $value;
    ++$i;
}


echo implode('|', $results_finaux); // Et on affiche les résultats séparés par une barre verticale |

?>