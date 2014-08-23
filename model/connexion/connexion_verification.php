<?php

include_once('model/connexion_database_verification.php');
include_once('model/connexion/hash_password.php');
include_once('model/connexion/hash_password_verification.php');

function connexion_verification($password, $email, $set_cookie, $password_encripte = false){

    // injection sql
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);

    $bdd = connexion_database_verification();

    $req = $bdd->prepare('SELECT password, salage, random, id FROM user WHERE email = ?');
    $req->execute(array($email));
    $donnees = $req->fetch();

    // il le password n'est pas encritpé:
    if(! $password_encripte){
        $password = hash_password_verification($password, $donnees['salage'], $donnees['random']);
    }
    $succed = $password == $donnees['password'];

    if($set_cookie && $succed){
        setcookie('sweettable_email', $email, time() + 365*24*3600, null, null, false, true);
        setcookie('sweettable_password', $password , time() + 365*24*3600, null, null, false, true);
    }

    $_SESSION['uid'] = 'user' . $donnees['id'];

    return $succed;

}



