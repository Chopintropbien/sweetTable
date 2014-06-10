<?php

// meme que dans les revue de son profil

/*
 * Une revue est un tableau de
 *  1° un boolean vraie si si l'utilisateur a confirmer sa revue sur ordi (c'est le truc pour pas etre capable de le faire sur son natel)
 *  2° Un restaurant
 *  3° Si l'utilisateur a confirmer sa revue un tableau de:
 *          1°  du commentaire de sa revue
 *          2°  nombre de personne qui ont voté util pour cette revus
 *          3°  nombre de personne qui ont voté drole pour cette revus
 *          4°  nombre de personne qui ont voté cool pour cette revus
 *          5°  nombre de personne qui fait un compliement pour cette revus
 *          6°  Date de publication
 *
 */

// les memes info que dans liste.php
/* Un restaurant est composé de restaurant représenté sous la forme d'un tableau avec comme élément :
	  * 		1° Le nom du restaurant
         * 		2° La photo du restaurant
         * 		3° la note du restaurant
         * 		4° Le prix du restaurant
         *		5° Le nombre d'Avis sur ce restaurant
         * 		6° Liste de toutes les cathégorie dans le quel rentre le restaurant
         * 		7° Le quartier dans le quel est le restaurant
         * 		8° Sa rue
         * 		9° Sa ville // 12 et 13 doivent former l'adresse
         * 		10° Son numéro de telephone
         * 		11° Lien vers la page de ce restaurant
         * 		12° La liste des événement à venir
         * 				Un evenement est un tableau:
         * 					1° la date
         * 					2° ce qui s'y passe
         * 					3° Le lien vers cette événement
	 */

function get_liste_revues(){

    $listeRevues = '{

            "revue0" : [
                        true,
                        [
                            "Chez J\'aime ",
						    "http://localhost/Meittopi/image/profil_vide.png",
					    	"4.5",
					    	"3",
				    		"100",
   					    	["Italien", "Pizza"],
    						"Malley",
	    					"Chemin de Malley 12",
		    				"1007 Lausanne",
			    			"04 50 62 29 24",
				    		"",
					    	[["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]]
                        ],
                        [
                            "voivci mon commentaire il est vraiment genial n est ce pas?",
                            2,
                            4,
                            7,
                            10,
                            "14/02/2014"
                        ]
                    ]

        }';

    return json_decode($listeRevues);

}