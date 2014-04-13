<?php
/*
 * Une revue non confirmé est un tableau de // a remarquer que c'est le meme mododle que quand profil/revue.php
 *  1° un boolean flase 
 *  2° Un restaurant
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

    function get_liste_revues_non_commente(){

        $listeRevuesNonCommente = '{

            "revue0" : [
                        false,
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
                        ]
                    ],
            "revue1" : [
                        false,
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
                        ]

                    ]

        }';

        return json_decode($listeRevuesNonCommente);

    }
