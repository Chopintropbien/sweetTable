<?php

function get_info_restau_complete(){

    /* De 1 a 12 c'est le meme que dans rehercher/rechercher.php (exepter les photo qui est une liste de 3 photo
     *      et 11 qui est le lien vers les photo)
     *  13 et 14 sont aussi dans rechercher.php
     *
     * 		1° Le nom du restaurant
     * 		2° 3 photos du restaurant
     * 		3° la note du restaurant
     * 		4° Le prix du restaurant
     *		5° Le nombre d'Avis sur ce restaurant
     * 		6° Liste de toutes les cathégorie dans le quel rentre le restaurant
     * 		7° Le quartier dans le quel est le restaurant
     * 		8° Sa rue
     * 		9° Sa ville // 12 et 13 doivent former l'adresse
     * 		10° Son numéro de telephone
     * 		11° Lien vers les photo
     * 		12° La liste des événement à venir
     * 				Un evenement est un tableau:
     * 					1° la date
     * 					2° ce qui s'y passe
     * 					3° Le lien vers cette événement

     *      13° Latitude de ou se trouve le restaurant
     *      14° Longitude de la ou se trouve le restaurant
     *      15° Horraire d'ouverture
     *
     */


    $info_restau_complete = '{
			"nom" : "Chez J\'aime ",
			"listePhotos" : ["http://localhost/Meittopi/image/profil_vide.png", "http://localhost/Meittopi/image/profil_vide.png", "http://localhost/Meittopi/image/profil_vide.png"],
			"note" : "4.5",
			"prix" : "3",
			"nbAvis" : "100",
			"listeCathegorie" : ["Italien", "Pizza"],
			"quartier" : "Malley",
			"rue" : "Chemin de Malley 12",
			"ville" : "1007 Lausanne",
			"tel" : "04 50 62 29 24",
			"lienPhoto" : "",
			"evenements" : [["Diamche", "tout à 13 fr sdfv s ds sfv sf df vgs ver cdfgbfgb sd bs d", ""]],
			"latitude" : 46,
			"longitude" : 0,
			"ouverture" : "Lundi-Vendredi 12h-22h"

}';

    return json_decode($info_restau_complete);
}