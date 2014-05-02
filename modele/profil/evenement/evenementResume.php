<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 9:12 AM
 */

    function getListeEvenementResume(){
        /*
         * Un evenement resume est une liste de:
         *  1° la photo principal de l'evenement
         *  2° le titrede l'evenement
         *  3° la date de l'evenement
         *  4° la liste des gens qui participe:
         *        les gens qui participe doivent se composer de
         *             1° leur speudo
         *             2° les info pour pouvoir avoir leur lien
         *  5° La participation de l'utilisateur (2 pour peut-etre et 3 pour non)
         *  6° le lien de l'enement
         */

        //~ $JSON = file_get_contents("http://localhost:5000/user/chiffa");

        $listeEvenementResumeJSON = '{
                    "evenementResume0" : [
							"http://localhost/Meittopi/image/profil_vide.png",
							"Sorie chez j aime comme tous les diamnche!!!!!!",
							"14/02/2014",
							[["Mehdi", "sss"], ["Lauriane", "def"]],
							2,
							"http://localhost/meittopi/unEvenement.php"
							],
					"evenementResume1" : [
							"http://localhost/Meittopi/image/profil_vide.png",
							"Sorie chez j aime comme tous les diamnche!!!!!!",
							"14/02/2014",
							[["Mehdi", "sss"], ["Lauriane", "def"]],
							2,
							"http://localhost/meittopi/unEvenement.php"
							]
        }';

        return json_decode($listeEvenementResumeJSON);

    }