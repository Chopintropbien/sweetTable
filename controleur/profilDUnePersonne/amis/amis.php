<?php

include('../modele/profilDUnePersonne/amis/amisEnCommun.php');
$liste_amis_en_commun_JSON = get_amis_en_commun();

include('../modele/profilDUnePersonne/amis/autresAmis.php');
$liste_autres_amis_JSON = get_autres_amis();

include('../modele/profilDUnePersonne/amis/personneQueSuitLaPersonne.php');
$liste_personne_suivis_JSON = get_liste_personne_suivis();





include('../vue/profilDUnePersonne/amis/amis.php');