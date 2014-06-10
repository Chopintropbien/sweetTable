<?php

// meme que dans les compliment du profil

/*
 * Un compliement est un tableau de:
 *  1° La photo de profil de celui qui a fait le compliement
 *  2° Le speudo de celui qui a fait le compliement
 *  3° La date a la quel a été fait le compliement
 *  4° Le compliment
 *  5° Le restaurant sur le quel a été ecrit la revus que la personne a compliementé
 *  6° Le lien pour la personne
 *  7° Le lien pour la revus sur le quel a été faite le compliement
 *  8° Le lien pour le restaurant dont était sujet la revue
 */

function get_compliment(){

    $liste_compliment = '{
                "compliement0": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "12/04/1993",
                        "franchement bravos!!!!! Un tres beau compliement",
                        "Chez Jaime",
                        "qsdf",
                        "qsdf",
                        "qsdf"
                        ]
        }';

    return json_decode($liste_compliment);
}