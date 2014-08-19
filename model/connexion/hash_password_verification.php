<?php

// password min length = 10
function hash_password_verification($password, $salage, $random_ints_array){

    // enlever 3 lettre au password
    $password = enleve_lettre($password, $random_ints_array[0]);
    $password = enleve_lettre($password, $random_ints_array[1]);
    $password = enleve_lettre($password, $random_ints_array[2]);

    $hashed_password = '';
    $i_p = 0; $i_s = 0; $i_r = 0;
    while($i_p < strlen($password) && $i_s < strlen($salage) && $i_r < strlen($random_ints_array)){
        if($random_ints_array[$i_r] % 2 == 0){
            $hashed_password .= $password[$i_p];
            ++$i_p;
        }
        else{
             $hashed_password .= $salage[$i_s];
            ++$i_s;
        }
        ++$i_r;
    }

    $hashed_password = ajoute_fin($hashed_password, $password, $i_p);
    $hashed_password =  ajoute_fin($hashed_password, $salage, $i_s);

    return hash('sha512', $hashed_password, false);

}

function ajoute_fin($hashed_password, $string, $i){
    for($i; $i < strlen($string); ++$i){
        $hashed_password .= $string[$i];
    }
    return $hashed_password;
}

function enleve_lettre($password, $int){
    $int = $int % strlen($password);
    $new_string = substr($password, 0, $int);
    if($int < strlen($password) -1) $new_string .= substr($password, $int + 1);
    return $new_string;
}