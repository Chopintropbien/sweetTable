<?php


/*
 * liste d'amis qui suivent l'utilisateur
 * Un amis est un tableau composer de:
 *      1° sa photo de profil
 *      2° son speudo
 *      3° La ville ou il habite
 *      4° Le nombre de revus qu'il a fait
 *      5° Le lien pour son profil
 *
 */


function get_personne_que_suit_l_utilisateur(){

    $liste_personne_que_suit_l_utilisateur = '{
                "amis0": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ]
        }';

    return json_decode($liste_personne_que_suit_l_utilisateur);
}