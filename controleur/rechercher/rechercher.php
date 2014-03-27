<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 4:47 PM
 */

include('modele/rechercher/rechercher.php');

$liste_restaurant_rechercheJSON = get_liste_restaurant_recherche();

include('vue/rechercher/rechercher.php');