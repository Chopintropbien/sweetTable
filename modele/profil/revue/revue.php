<?php
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

        return json_decode($listeRevues);

    }