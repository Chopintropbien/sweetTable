<?php

function inscription($prenom, $nom, $uid){

    $uid = 'user' . $uid;
    $name = $prenom . ' '. $nom;

    $url = 'http://localhost:5000/user';

    $data = array('uid' => $uid, 'name' => $name);
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
    $succed = file_get_contents($url, false, $context);
    if($succed) $_SESSION['uid'] = $uid;

    return $succed;
}