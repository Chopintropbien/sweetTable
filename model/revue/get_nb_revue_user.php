<?php


function get_nb_revue_user($uid_user){
    $response = file_get_contents('http://localhost:5000/user?full=true&iud' . $uid_user);
    var_dump($response);
    return count($response['review_list']);
}