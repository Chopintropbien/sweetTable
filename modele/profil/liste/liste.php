<?php 
function get_listeDeListe(){

    /*
     * La liste des liste qu'a fait l'utilisateur est donc une suite de liste composer de:
     *  1° Le titre de la liste
     *  2° D'une liste des elements commenté
     */

    /*
     * Un evenement commenté se compose
     *  1° d'un element: restaurant, amis, sortie, ect
     *  2° Du commentaire de la personne sur cette element (s'il y en a pas, mettre une string vide)
     *  3° Du type de l'élément (pour que je sache qu'est ce que tu m'envois et pour que je puisse appeler la bonne fonction)
     *         J'ai pensé a une énumération maias il faut que je regarde comment ca marche en php
     *          Pendant ce temps j'ai mis ca en string et les differents type sont:
     *              - restaurant
     *              - ami
     *              - evenement
     *              - discution
     *          A voir si on en rajoute d'autre.
     */

// pendant ce temps je n'ai que fait pour les restau. Et la liste d'un restaurant est celle ci dessous
    // c'est la meme que la liste des restau pour les revus


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
	 
	
	//$JSON = file_get_contents("http://localhost:5000/user/chiffa");
	
	$json = '{
	
				"liste0": [
							"Voici mon titre",
							[
								[
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
									"voici mon commentaire at oui cest vriament trop bien",
									"restaurant"
								],

								[
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
									"",
								    "restaurant"

								]
							 ]
						]

	
	}';
	
	return json_decode($json);
}
?>












