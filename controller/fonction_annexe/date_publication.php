<?php

// date => forma du serveur ex: 2014-08-18T10:02:00.714368
function date_publication($date){
    //$array_today = getdate(time());

    $date_pub = date_serveur_to_get_date($date);

    return 'le ' . $date_pub['mday'] .'-'. $date_pub['mon'] .'-'.$date_pub['year'];

}

function date_serveur_to_get_date($date){
    $array = explode('T', $date);
    $date_array =explode('-', $array[0]);
    $hours_array = explode(':', $array[1]);

    $same_format = array();

    $same_format['year'] = $date_array[0];
    $same_format['mon'] = $date_array[1];
    $same_format['mday'] = $date_array[2];

    $same_format['hours'] = $hours_array[0];
    $same_format['minutes'] = $hours_array[1];

    return $same_format;
}