<?php


function ajoute_restaurant_db($uid, $name, $opening_date, $operation_horus){


    $url = 'http://localhost:5000/restaurant';

    $data = array('uid' => $uid, 'name' => $name, 'opening_date' => $opening_date, 'operation_horus' => $operation_horus);
    $data = json_encode($data);
    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n",
            'method'  => 'POST',
            'content' => $data
        )
    );


    $context  = stream_context_create($options);
    return file_get_contents($url, false, $context);

}