<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 1:44 PM
 */
include('../modele/profil/amis/amis.php');
include('../modele/profil/amis/personneQuiSuiventLUtilisateur.php');

$liste_personne_qui_suivent_l_utilisateur = get_personne_qui_suivent_l_utilisateur();

include('../vue/profil/amis/amis.php');