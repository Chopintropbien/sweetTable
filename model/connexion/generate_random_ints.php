<?php

function generate_random_ints($length){

    $random_ints = '';
    for($i = 0; $i < $length; ++$i){
        $random_ints .= rand(0, 9);
    }

    return $random_ints;
}