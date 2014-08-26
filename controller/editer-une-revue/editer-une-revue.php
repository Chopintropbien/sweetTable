<?php

// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // si c'est pour editer une renue;
    if($_GET['uid_revue']){
        include ('model/get_revue.php');
        $revue_JSON = get_revue($_GET['uid_revue']);
    }

    //TODO: mettre erreur s'il n'y a pas de get
    include ('model/get_restaurant.php');
    $restaurantJSON = get_restaurant($_GET['uid'], false);

    include ('vue/editer-une-revue/editer-une-revue.php');
}
else include('home.php');
