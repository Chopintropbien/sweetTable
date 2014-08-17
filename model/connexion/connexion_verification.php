<?php

include_once('model/connexion_database_verification.php');
include_once('model/connexion/hash_password.php');
include_once('model/connexion/hash_password_verification.php');

function connexion_verification($password, $email, $set_cookie, $password_encripte = false){
//TODO: ne pas bousiller la base de bonne

    $bdd = connexion_database_verification();

    $req = $bdd->prepare('SELECT password, salage, random FROM user WHERE email = ?');
    $req->execute(array($email));
    $donnees = $req->fetch();

    // il le password est deja encripté: il viens de cookie
    if(! $password_encripte){
        $password = hash_password_verification($password, $donnees['salage'], $donnees['random']);
    }
    $succed = $password == $donnees['password'];

    if($set_cookie && $succed){
        setcookie('sweettable_email', $email, time() + 1, null, null, false, true); // TODO:  365*24*3600
        setcookie('sweettable_password', $password , time() + 1, null, null, false, true);
    }

    return $succed;

}



