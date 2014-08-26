<?php

// mois de 1 à 12
function check_date($jour, $mois, $annee){
    // si pas bien replis
    if($jour == 'null' || $mois == 'null' || $annee == 'null'){
        return false;
    }
    // n'autaurise pas les 31 quand il n'y en a pas
// n'autaurise pas les 31 quand il n'y en a pas
    else if(($mois == 2 || $mois == 4 || $mois == 6 || $mois == 9 || $mois == 11) && $mois == 31){
        return false;
    }
    // n'autaurise pas le 30frevier
    else if( $mois == 2 && $jour == 30){
        return false;
    }

// si l'annee n'est pas bixetile => pas authauriser le 29 fevrier
    else if( ! is_bisextile($annee) && $mois == 2 && $jour == 29){
        return false;
    }
    else return $annee . '-' . $mois . '-' . $jour;
}


function is_bisextile($year){
    return ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0;
}