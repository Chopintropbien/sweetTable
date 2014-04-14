<?php

include('../modele/amis/rechercherAmis/rechercher-amis.php');
$listePersonneRechercheJSON = get_liste_personne_recherche();

include('../modele/amis/rechercherAmis/personne-suggestion.php');
$listePersonneSuggestionJSON = get_liste_personne_suggestion();

include('../vue/amis/rechercherAmis/rechercher-amis.php');