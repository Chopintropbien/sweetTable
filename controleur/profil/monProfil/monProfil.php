<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 5:15 PM
 */

include('../modele/profil/monProfil/monProfil.php');

$profilCompletJSON = get_profil_complet();

include('../vue/profil/monProfil/monProfil.php');