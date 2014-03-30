<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 5:15 PM
 */

include('../modele/profil/monProfil/monProfil.php');
include('../modele/profil/monProfil/notification.php');

$profilCompletJSON = get_profil_complet();
$listeNotificationJSON = get_notification();

include('../vue/profil/monProfil/monProfil.php');