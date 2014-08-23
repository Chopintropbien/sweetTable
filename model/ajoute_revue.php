<?php


function ajoute_revue($person_uid, $restau_uid, $title, $contents, $note){
    $url = 'http://localhost:5000/review';

    $data = array('person_uid' => $person_uid, 'restau_uid' => $restau_uid, 'title' => $title, 'contents' => $contents,
                  'note' => $note);
    var_dump($data);
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
