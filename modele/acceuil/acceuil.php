<?php
function get_liste_acceuil(){

/* chaque revue est un tableau composer de:
 * 	1°	Le nom de la personne de la personne qui a fait la revue qui va apparaitre a l'écran intcate: ex: mettre nom + prenom
 *  2° 	La photo de proil de la personne qui fait la revue
 *  3°  Le resaturant commanté
 *  4°  La date d'écriture de la revue -> il faudra que tu me dise quel format tu utilise
 * 	5°  La note que le restaurant à recu
 *  6°  Le texte de la revue
 *  7° True si l'utilisateur suis la personne else false
 * 	8° Mettre les information necessaire pour retrouver le lien de la personne qui a commanter -> a discuter
 *  9° De même pour le restaurant -> a discuter
 *  10°  Si la personne connecter a trouver la revue drole, mettre true sinon false
 *  11°  De même pour utile
 *  12°  De même pour cool

 */


    $liste_acceuil = '{
			"revue0" : [
						"Andreï Kucharavy",
						"http://localhost/Meittopi/image/profil_vide.png",
						"Chez J\'aime ",
						"14/02/2014",
						"2.5",
						"Oui, j\'ai vraime aimer. les pizza sont pas cher du tout!!!!! Et tres bonnes Ma oui mA oui!!!!",
						true,
						"Je ne sais pas quoi",
						"de meme",
						true,
						false,
						true

						]

}';


    return json_decode($liste_acceuil);
}