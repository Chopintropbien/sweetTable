<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 1:44 PM
 */
include('../modele/profil/amis/amis.php');
include('../modele/profil/amis/personneQuiSuiventLUtilisateur.php');
include('../modele/profil/amis/personneQueSuitLUtilisateur.php');

$liste_personne_qui_suivent_l_utilisateur = get_personne_qui_suivent_l_utilisateur();
$liste_personne_que_suit_l_utilisateur = get_personne_que_suit_l_utilisateur();
$liste_amis_utilisateur =  get_amis_utilisateur();

include('../vue/profil/amis/amis.php');