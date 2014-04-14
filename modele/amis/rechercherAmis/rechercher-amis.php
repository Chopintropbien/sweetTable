<?php

/*
 * liste des personnes que l'utilisateur a rechercher
 * Une personne recherché est sont de 1 à 5 un amis:
 *      1° Sa photo de profil
 *      2° Son speudo
 *      3° La ville ou il habite
 *      4° Le nombre de revus qu'il a fait
 *      5° Le lien pour son profil
 * Il se rajoute:
 *      6° Si l'utilisateur est amis avec la personne
 *      7° Le nombre d'amis qu'elles ont en commun
 *      8° Sa date de naissance
 *
 */

function get_liste_personne_recherche(){

    $listePersonneRecherche = '{

                "amis0": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk",
                        true,
                        2,
                        "04/08/1993"
                        ],

                "amis1": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk",
                        false,
                        2,
                        "04/08/1993"
                        ]
    }';

    return json_decode($listePersonneRecherche);
}