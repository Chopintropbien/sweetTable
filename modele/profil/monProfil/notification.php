<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/27/14
 * Time: 12:12 PM
 */

/*
 * Un commentaire ect composerde :
 *  1° Le speudo de la personne qui est concerner dans cette notification
 *  2° La photo de profil de cette personne
 *  3° La date de quand la notification à été faite
 *  2° Le lien pour cette notification
 *  4° Le type de la notification representer par un entier:
 *
 *          0: Quelqu'un a fait une revus sur un restaurant
 *          1: Quelqu'un invite l'utilisateur a un evenement
 *          2: Quelqu'un a fait un vote pour utils a l'utilisateur
 *          3: Quelqu'un a fait un vote pour drole a l'utilisateur
 *          4: Quelqu'un a fait un vote pour cool a l'utilisateur
 *          5: Quelqu'un
 *          6: Quelqu'un a fait un compliment à l'utilisateur
 *          7: Quelqu'un
 */



function get_notification(){

    $listeNotification = '{
            "notification0" : [
                                "Andreï",
                                "http://localhost/Meittopi/image/profil_vide.png",
                                "il y a 2 min",
                                "sd",
                                "commentaire"
                            ],
            "notification1" : [
                                "Andreï",
                                "http://localhost/Meittopi/image/profil_vide.png",
                                "il y a 2 min",
                                "sd",
                                "commentaire"
                            ]
    }';


    return json_decode($listeNotification);
}