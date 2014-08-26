<?php
session_start();
include('controller/config.php');

include('model/connexion/hash_password_verification.php');
include('model/connexion/generate_random_ints.php');
include('model/connexion/generate_salage.php');


// deconnexion
if(isset($_GET['session_destroy'])){
    $_SESSION = [];
    session_destroy();
    include('controller/destroy_cookie.php');
}

if(isset($_SESSION['uid'])) include('controller/home/home.php');
else include('controller/connexion/connexion_inscription.php');

