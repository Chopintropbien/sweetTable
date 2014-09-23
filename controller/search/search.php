<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])){
    include ('model/search/restau_recherche.php');
    $liste_restaurant_rechercheJSON = get_liste_restaurant_recherche();


    // search something
    include('controller/search/search_something.php');

    // html code
    include ('vue/search/search.php');

}
else include('controller/connexion/connexion_inscription.php');

