<?php


function generate_salage($length){

    $salage = '';
    for($i = 0; $i < $length; ++$i){
        $salage .= chr(rand(33, 125));
    }

    return $salage;

}