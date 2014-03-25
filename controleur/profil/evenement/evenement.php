<?php

include('../modele/profil/evenement/evenement.php');

$listeEvenementJSON = getListeEvenement();

include('../vue/profil/evenement/evenement.php');

?>
