<?php

$lettreTape = $_POST['lieu'];

$data = unserialize(file_get_contents('../../modele/navigateur/towns.txt')); // Récupération de la liste complète des villes
$dataLen = count($data);
sort($data);

$results = array();

// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats


for ($i = 0 ; $i < $dataLen && count($results) < 10 ; $i++) {
    if (stripos($data[$i], $lettreTape) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
        array_push($results, $data[$i]);

    }
}

echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |

?>