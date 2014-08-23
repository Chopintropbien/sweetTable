<?php

include_once('model/connexion_database_verification.php');
include_once('model/connexion/generate_random_ints.php');
include_once('model/connexion/generate_salage.php');


function inscription_pour_verification($email, $password){

    // injection sql
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);


    $bdd = connexion_database_verification();

    $salage = generate_salage(20);
    $random = generate_random_ints(50);

    $req = $bdd->prepare('INSERT INTO user(email, password, salage, random) VALUES(:email, :password, :salage, :random)');
    $req->execute(array(
        'email' => $email,
        'password' => hash_password_verification($password, $salage, $random),
        'salage' => $salage,
        'random' => $random
    ));

    $req = $bdd->prepare('SELECT id FROM user WHERE email = ?');
    $req->execute(array($email));
    $donnees = $req->fetch();

    return $donnees['id'];
}