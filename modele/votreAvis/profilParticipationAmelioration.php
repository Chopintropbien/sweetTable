<?php


/**
 * Le profil de participation est la pour que l'utilisateur sache a quel point il a participer aux amelioration du site
 * Il contient:
 *      1° Son speudo
 *      2° Sa ville
 *      3° La photo de profil
 *      4° Le nombre de vote pour qu'il a fait sur les propositins d'amelioration des autres.
 *      5° Le nombre de vote contre qu'il a fait sur les propositins d'amelioration des autres.
 *      6° Le nombre d'amelioration propoposé par l'utilisateur
 *      7° La grade de la personne dans son niveau de participation
 *
 */

function get_profil_participation_amelioration(){

    $profilParticipation = '{
            "speudo" : "Andrei Kucharavy",
            "ville" : "Kansas City",
            "photoProfil" : "http://localhost/Meittopi/image/profil_vide.png",
            "nbPour" : 2,
            "nbContre" : 3,
            "nbAmelioration" : 5,
            "statut" : "Big bosse du site"

    }';



    return json_decode($profilParticipation);
}