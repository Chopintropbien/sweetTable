<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/30/14
 * Time: 8:53 AM
 */

include('../modele/profil/compliment/compliment.php');

$listeCompliement = get_compliment();

include('../vue/profil/compliment/compliment.php');