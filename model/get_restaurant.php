<?php

function get_restaurant($uid, $full){
    if($full) $full = 'true';
    else $full = 'false';

    return json_decode(file_get_contents('http://localhost:5000/restaurant?full='.$full.'&uid='. $uid));
}