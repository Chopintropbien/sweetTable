<?php

include_once('model/connexion/connexion_verification.php');

if(isset($_COOKIE['sweettable_email']) && isset($_COOKIE['sweettable_password']) && ! isset($_SESSION['uid'])){
    $succed = connexion_verification($_COOKIE['sweettable_password'], $_COOKIE['sweettable_email'], true, true);

    // si les cookie etait faux, les detuire
    if(! $succed) include('controller/destroy_cookie.php');
}