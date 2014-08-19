<?php
function get_liste_publication(){

    /* chaque revue est un tableau composer de:
     * 	1°	Le nom de la personne de la personne qui a fait la revue qui va apparaitre a l'écran intcate: ex: mettre nom + prenom
     *  2° 	La photo de proil de la personne qui fait la revue
     *  3°  L'uid de cette personne
     *  4°  La date d'ecriture
     *  5°  Le  nom du resaturant commanté
     *  6   L'uid du resaturant commanté
     *  7°  La note du restaurant
     *  8°  Le texte de la revue
*/


    /* Une publication de photo de est un tableau composé de
     * 	1°	Le nom de la personne de la personne qui a fait la revue qui va apparaitre a l'écran intcate: ex: mettre nom + prenom
     *  2° 	La photo de proil de la personne qui fait la revue
     *  3°  L'uid de cette personne
     *  4°  La date d'ecriture
     *  5°  Le  nom du resaturant commanté
     *  6   L'uid du resaturant commanté
        7 - 8 -9 ° Un tableau avec:
               - le scr de la photo
               - l'uid de la photo.
    // il peut y donc y avoir une deux ou trois photo
    */


    $liste_acceuil = '{
			"revue" : [
						"Andreï Kucharavy",
						"http://localhost/Meittopi/image/profil_vide.png",
						"uid_andrei",
						"14/02/2014",
						"Chez J\'aime ",
						"uid_restauranr",
						"Un super titre de la mort qui tue!!!",
						"2.5",
						"Oui, j\'ai vraime aimer. les pizza sont pas cher du tout!!!!! Et tres bonnes Ma oui mA oui!!!!"
						]
		 


}';


    return json_decode($liste_acceuil);
}