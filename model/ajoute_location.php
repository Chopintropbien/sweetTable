<?php

function ajoute_location($uid, $type, $payload, $GPS, $diameter){


    $url = 'http://localhost:5000/location';

    $data = array('uid' => $uid, 'type' => $type, 'payload' => $payload, 'GPS' => $GPS, 'diameter' => $diameter);
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