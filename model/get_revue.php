<?php

function get_revue($uid){
    return json_decode(file_get_contents('http://localhost:5000/review?uid='. $uid));
}