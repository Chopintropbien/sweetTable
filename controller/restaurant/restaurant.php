<?php



if(isset($_SESSION['uid'])){
    include ('model/restaurant/restaurant.php');
    $restaurantJSON = get_info_restau_complete();

    include('model/restaurant/liste_revue.php');
    $liste_revuesJSON =  get_liste_revue();

    include ('vue/restaurant/restaurant.php');
}
else include('home.php');

