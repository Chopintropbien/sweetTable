<?php



if(isset($_SESSION['uid']) && isset($_GET['uid'])){
    include ('model/get_restaurant.php');
    $restaurantJSON = get_restaurant($_GET['uid'], true);

    var_dump($restaurantJSON);

    include('model/restaurant/liste_revue.php');
    $liste_revuesJSON =  get_liste_revue();

    include ('vue/restaurant/restaurant.php');
}
else include('home.php');

