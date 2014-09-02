<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // get profil
    include('model/get_profil.php');

    // avoir le profil de l'utilisateur ou celui d'une autre, pour pouvoir le regarder.
    // $profil_user => true si c'est le propre profil de l'utilisateur
    if(isset($_GET['uid']) && $_GET['uid'] != $_SESSION['uid']){
        $profil_JSON = get_profil($_GET['uid'], true);
        $profil_user = false;
    }
    else{
        $profil_JSON = get_profil($_SESSION['uid'], true);
        $profil_user = true;
    }


    // si get profil a bien fonctionne
    if($profil_JSON){

        // editer une revue
        include('vue/profil/editer_revue.php');

        // modifier le profil
        include('vue/profil/modifier_profil.php');


        include('vue/profil/profil.php');
    }
    else include ('vue/page_error/page_error.php');


}

else include('controller/connexion/connexion_inscription.php');
