<?php

function manage_tag($uid, $array_cuisine_tags, $array_other_tags){

    $url = 'http://localhost:5000/restaurant';
    $data = array('uid' => $uid, 'cuisine_tags' => $array_cuisine_tags, 'other_tags' => $array_other_tags);
    $data = json_encode($data);

    $chlead = curl_init();
    curl_setopt($chlead, CURLOPT_URL, $url);
    curl_setopt($chlead, CURLOPT_USERAGENT, 'SugarConnector/1.4');
    curl_setopt($chlead, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data)));
    curl_setopt($chlead, CURLOPT_VERBOSE, 1);
    curl_setopt($chlead, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($chlead, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($chlead, CURLOPT_POSTFIELDS, $data);
    curl_setopt($chlead, CURLOPT_SSL_VERIFYPEER, 0);
    $chleadresult = curl_exec($chlead);
    $chleadapierr = curl_errno($chlead);
    $chleaderrmsg = curl_error($chlead);
    curl_close($chlead);
}