<?php

include('modele/votreAvis/listeAmelioration.php');
include('modele/votreAvis/profilParticipationAmelioration.php');

$listeAmeliorationJSON =  get_liste_amelioration();
$profilParticipationJSON = get_profil_participation_amelioration();

include('vue/votreAvis/votre-avis.php');