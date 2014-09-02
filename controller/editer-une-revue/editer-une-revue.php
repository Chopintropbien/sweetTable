<?php

//TODO: a verifier la gestion des erreur

// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid']) && isset($_GET['uid'])){

    include ('model/get_restaurant.php');
    $restaurantJSON = get_restaurant($_GET['uid'], false);

    if( $restaurantJSON){

        // si c'est pour editer une renue;
        if($_GET['uid_revue']){
            include ('model/get_revue.php');
            $revue_JSON = get_revue($_GET['uid_revue']);
        }

        //si get la revue a echouee
        if(isset($revue_JSON) && ! $revue_JSON){
            include ('vue/page_error/page_error.php');
        }
        else include ('vue/editer-une-revue/editer-une-revue.php');


    }
    else include ('vue/page_error/page_error.php');



}
elseif (! isset($_GET['uid'])) include ('vue/page_error/page_error.php');
else include('controller/connexion/connexion_inscription.php');
