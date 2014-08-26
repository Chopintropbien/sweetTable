<?php

function verification_donnee_inscription($prenom, $nom, $email, $verification_email, $password){


    $regex_email = '/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
    //$regex_email_sans_maj = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $regex_pas_vide = '/[^ \n\t]/';

    $result = true;

    $result = $result && verification_name($prenom);

    $result = $result && verification_name($nom);

    $result = $result && preg_match($regex_email, $email);
    $result = $result && preg_match($regex_pas_vide, $email);

    $result = $result && ($email == $verification_email);
    $result = $result && (strlen($password) >= 10);

    return $result;
}

function verification_name($name){
    $regex_name = '/^[a-zA-Zéèçàïêë ]+$/';
    $regex_pas_vide = '/[^ \n\t]/';
    return  preg_match($regex_name, $name) && preg_match($regex_pas_vide, $name);
}