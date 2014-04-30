<?php

include('../modele/restaurant/restaurant/restaurant.php');
$restaurantJSON = get_info_restau_complete();

include('../modele/restaurant/restaurant/listeRevus.php');
$listeRevuesJSON =  get_liste_revue();


include('../vue/restaurant/restaurant/restaurant.php');