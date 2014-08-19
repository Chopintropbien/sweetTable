<?php

include_once('model/connexion_database_verification.php');

function unique_adresse_mail($email){
    $bdd = connexion_database_verification();

    $req = $bdd->prepare('SELECT id FROM user WHERE email = ?');
    $req->execute(array($email));
    $donnees = $req->fetch();

    return  ! $donnees['id'];
}