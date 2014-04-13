<?php

include('modele/laissezUnAvis/laisser-un-avis.php');

$listeRevueNonCommenteJSON = get_liste_revues_non_commente();

include('vue/laissezUnAvis/laisser-un-avis.php');