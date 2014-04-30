<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/26/14
 * Time: 4:47 PM
 */

    function get_liste_restaurant_recherche(){

        /* La liste de restaurant est composé de restaurant représenté sous la forme d'un tableau avec comme élément :
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
         * 		13° La liste des amis qui aime ce restaurant,
         * 		14° La liste des amis qui aime moyennement ce restaurant
         * 		15° La liste des amis qui n'aime pas ce restaurant
         * 				Chaque amis est lui même représenté sous la forme d'un tableau avec
         * 					1° Son speudo
         * 					2° Le nombre d'avis qu'il a mis sur le restaurant
         * 					3° Les infomations dur le lien de sa page profil
         * 					4° Les information pour le lien vers ses avis
         *      16° Latitude de ou se trouve le restaurant
         *      17° Longitude de la ou se trouve le restaurant
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
						"Malley",
						"Chemin de Malley 12",
						"1007 Lausanne",
						"04 50 62 29 24",
						"http://localhost/meittopi/restaurant/restaurant.php",
						[["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]],
						[["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
						[["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
						[["Mehdi", 3, "",""], ["Andrei", 3, "",""]],
						46,
						0
						]

}';


        return json_decode($liste_restaurant_recherche);
    }
