<?php

function get_liste_restaurant_recherche(){

    /* La liste de restaurant est composé de restaurant représenté sous la forme d'un tableau avec comme élément :
     * 		1° Le nom du restaurant
     * 		2° La photo du restaurant
     * 		3° la note du restaurant
     * 		4° Le prix du restaurant
     *		5° Le nombre d'Avis sur ce restaurant
     * 		6° Liste de toutes les cathégorie dans le quel rentre le restaurant
     *      7° son iud
     *      8° Latitude de ou se trouve le restaurant
     *      9° Longitude de la ou se trouve le restaurant
     *      10° Son adresse
     * 		11° Son numéro de telephone
     *
     */


    $liste_restaurant_recherche = '{
			"restau0" : [
						"Chez J\'aime ",
						"http://localhost/Meittopi/image/profil_vide.png",
						"4.5",
						"3",
						"100",
						["Italien", "Pizza"],
						"uid",
						"Malley <br/> Chemin de Malley 12 <br/> 1007 Lausanne",
						"04 50 62 29 24",
						46,
						0

						],
		    "restau1" : [
						"Chez J\'aime ",
						"http://localhost/Meittopi/image/profil_vide.png",
						"4.5",
						"3",
						"100",
						["Italien", "Pizza"],
						"uid",
						"Malley <br/> Chemin de Malley 12 <br/> 1007 Lausanne",
						"04 50 62 29 24",
						46,
						0
						]


}';


    return json_decode($liste_restaurant_recherche);
}
