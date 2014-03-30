<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/29/14
 * Time: 9:49 AM
 */

include ('../modele/profil/revue/revue.php');

$listeRevueJSON = get_liste_revues();

include ('../vue/profil/revue/revue.php');