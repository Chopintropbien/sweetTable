<?php
$recherche_restau_JSON = array();
if(isset($_GET['where']) && isset($_GET['search'])){

    // get location
    //include('model/search_location.php');
    //$JSON_location = search_location($_GET['where']);
    //var_dump($JSON_location);

    //include('model/search_restaurant.php');
    //var_dump(search_restaurant($_GET['search'], $JSON_location->_source->GPS, $JSON_location->_source->diameter, '', '', 0, 5));


    include ('model/get_restaurant.php');



    $recherche_restau_JSON[] = get_restaurant('V24CDI', true);
    $recherche_restau_JSON[] = get_restaurant('8H1ZQJ', true);
    $recherche_restau_JSON[] = get_restaurant('NHMZGH', true);


    //var_dump($recherche_restau_JSON);
}






