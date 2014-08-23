<?php

if(isset($_SESSION['uid'])){

    // ajouter une revue
    if($_POST['note'] != 0 && isset($_POST['uid_restau']) && isset($_POST['titre']) && isset($_POST['revue'])){
        include('model/ajoute_revue.php');
        ajoute_revue($_SESSION['uid'], $_POST['uid_restau'], $_POST['titre'], $_POST['revue'], $_POST['note']);
    }


    include ('model/get_restaurant.php');
    $restaurantJSON = get_restaurant($_GET['uid'], false);

    include ('vue/editer-une-revue/editer-une-revue.php');
}
else include('home.php');
