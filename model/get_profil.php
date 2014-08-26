<?php

function get_profil($uid_user, $full){
    if($full) $full = 'true';
    else $full = 'false';

    return json_decode(file_get_contents('http://localhost:5000/user?full='.$full.'&uid=' . $uid_user));
}