<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/29/14
 * Time: 9:50 AM
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
                            10
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