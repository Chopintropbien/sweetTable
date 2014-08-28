<?php

// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){
    include ('vue/about-us/about-us.php');
}
else include('controller/connexion/connexion_inscription.php');
