<?php


include('modele/unEvenement/unEvenement.php');
include('modele/unEvenement/discution.php');

$evenementJSON = get_evenement();
$listeDiscutionJSON = get_discutions();

include('vue/unEvenement/unEvenement.php');