<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 1:46 PM
 */
    function get_personne_qui_suivent_l_utilisateur(){

        $liste_personne_qui_suivent_l_utilisateur = '{
                "amis0": [
                        "http://localhost/Meittopi/image/profil_vide.png",
                        "Andrei Kucharavy",
                        "Kansas City",
                        3,
                        "qfjk"
                        ]
        }';

        return json_decode($liste_personne_qui_suivent_l_utilisateur);
    }