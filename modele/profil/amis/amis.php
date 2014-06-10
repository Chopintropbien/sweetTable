<?php


/*
 * liste d'amis de l'utilisateur
 * Un amis est un tableau composer de:
 *      1° sa photo de profil
 *      2° son speudo
 *      3° La ville ou il habite
 *      4° Le nombre de revus qu'il a fait
 *      5° Le lien pour son profil
 *
 */


function get_amis_utilisateur(){

    $liste_amis_utilisateur = '{
                "amis0": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis1": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis2": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis3": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis4": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis5": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis6": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis7": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis8": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis9": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis10": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis11": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis12": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis13": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ],
                "amis14": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ]
        }';

    return json_decode($liste_amis_utilisateur);
}