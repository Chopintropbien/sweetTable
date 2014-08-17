<?php

include ('model/search/restau_recherche.php');
$liste_restaurant_rechercheJSON = get_liste_restaurant_recherche();

include ('vue/search/search.php');
