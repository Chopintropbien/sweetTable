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


    /* Un evenement est aussi un tableau mais compose de:
 *  1° Le nom de la personne de la personne qui organise l'événement
 *  2° La photo de profil de celui qui organise l'élément
 *  3° La liste, sous forme de tableau des photos de l'événement (3 maxi)
 *  4° Le titre de l'événenement
 *  5° La date d'écriture de l'événement
 *  6° La date de l'événement
 *  7° La liste des invités:
 * 			Chaque invité est un tabeau composé de:
 * 					1° Son speudo
 * 					2° Si il a confirmer ou pas sa venue (0 → pas repondu, 1-> non, 2 → peut-être, 3-> oui )
 * 					3° Les information necessaire pour retrouver le lien de la personne invité -> à discuter
 *  8° Message perso de la part de celui qui a creer l'évenement à l'utilisateur, mettre null ou '' s'il n'y en a pas
 *  9° La description de la sortie
 *  10° Mettre si la réponse de l'utilisateur à l'invitation (0 → pas repondu, 1-> non, 2 → peut-être, 3-> oui )
 *  11° Les information qui permettront des retrouver le lien de la personne qui a creer l'evenement
 *  12° Les information qui permettront des retrouver le lien de l'événement
 */

    //TODO: enlever la 13° ligne de revue0;

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
						true,
						"truc bidon a envelever quand andrei aura fait l api"
						],
		    "evenement1" : [
							"Andreï Kucharavy",
							"http://localhost/Meittopi/image/profil_vide.png",
							["http://localhost/Meittopi/image/profil_vide.png","http://localhost/Meittopi/image/profil_vide.png"],
							"Sorie chez j aime comme tous les diamnche!!!!!!",
							"il y a 2 min",
							"14/02/2014",
							[["Mehdi", 1, "sss"], ["Lauriane", 3, "def"]],
							"Je veux absolument que tu viennes!!!!! J aimerais vraiment te voir, s il te plais vien!!!!!!!!!!!!!!",
							"Alors, comme d ab, on va chez jaime et on mange plein de pizzaaaaaaaaaaa",
							1,
							"ee",
							"sss"
							],
			"evenement0" : [
							"Andreï Kucharavy",
							"http://localhost/Meittopi/image/profil_vide.png",
							["http://localhost/Meittopi/image/profil_vide.png","http://localhost/Meittopi/image/profil_vide.png"],
							"Sorie chez j aime comme tous les diamnche!!!!!!",
							"il y a 2 min",
							"14/02/2014",
							[["Mehdi", 0, "sss"], ["Lauriane", 2, "def"]],
							"Je veux absolument que tu viennes!!!!! J aimerais vraiment te voir, s il te plais vien!!!!!!!!!!!!!!",
							"Alors, comme d ab, on va chez jaime et on mange plein de pizzaaaaaaaaaaa",
							3,
							"ee",
							"sss"
							]

}';


    return json_decode($liste_acceuil);
}