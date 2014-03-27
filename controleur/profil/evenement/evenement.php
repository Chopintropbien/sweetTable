<?php

include_once('../modele/profil/evenement/evenement.php');
include_once('../modele/profil/evenement/evenementResume.php');

$listeEvenementJSON = getListeEvenement();
$listeEvenementResumeJSON = getListeEvenementResume();
include('../vue/profil/evenement/evenement.php');

?>
