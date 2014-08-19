<?php

include_once('model/connexion_database_verification.php');

function create_session($email){

    $bdd = connexion_database_verification();

    $req = $bdd->prepare('SELECT id FROM user WHERE email = ?');
    $req->execute(array($email));
    $donnees = $req->fetch();
}