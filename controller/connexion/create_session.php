<?php

function create_session($uid, $prenom, $nom, $date_de_naissance){
    $_SESSION['uid'] = $uid;
    $_SESSION['nom'] = $prenom . ' ' . $nom;

}