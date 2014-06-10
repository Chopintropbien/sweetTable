<?php

include ('../modele/profil/revue/revue.php');
$listeRevueJSON = get_liste_revues();

include ('../vue/profil/revue/revue.php');