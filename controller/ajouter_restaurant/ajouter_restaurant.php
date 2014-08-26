<?php

// si l'utilisateur à été mémoriser => creer la session
include_once('controller/connexion/connexion_automatique.php');

if(isset($_SESSION['uid'])) {
    include('controller/ajouter_restaurant/add_or_send_restau.php');

    include ('vue/ajouter_restaurant/ajouter_restaurant.php');
}
else include('home.php');

