<?php


// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid']) && isset($_GET['uid'])){
    include ('model/get_restaurant.php');
    $restaurantJSON = get_restaurant($_GET['uid'], true);

    if($restaurantJSON)
        include ('vue/restaurant/restaurant.php');
    else include ('vue/page_error/page_error.php');

}
elseif(! isset($_GET['uid'])) include ('vue/page_error/page_error.php');
else include('controller/connexion/connexion_inscription.php');
