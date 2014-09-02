<?php
//TODO: verifier gestion des erreurs

// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){

    // get profil
    include('model/get_profil.php');
    $profil_JSON = get_profil($_SESSION['uid'], true);

    // si get profil q bien reussis
    if($profil_JSON){
        include ('model/home/liste_publication.php');
        $liste_publication_JSON = get_liste_publication();

        include ('vue/home/home.php');
    }
    else include ('vue/page_error/page_error.php');


}
else include('controller/connexion/connexion_inscription.php');
