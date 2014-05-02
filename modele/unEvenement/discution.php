<?php



function get_discutions(){

/*
 * Une  reponse a une discution est:
 *      1° La photo de la personne qui reponds
 *      2° Le speudo de la persone qui reponds
 *      3° Le texte de la reponse
 *      4° Date de publication
 *      4° Lien de la personne
 */

    $evenement = '{
			"discution0" : [
							"http://localhost/Meittopi/image/profil_vide.png",
							"Andreï Kucharavy",
							"C\'est pas mal cette discution! vraiement pas mal du tout!!!",
							"02/12/1202",
							""
							],
			"discution1" : [
							"http://localhost/Meittopi/image/profil_vide.png",
							"Andreï Kucharavy",
							"C\'est pas mal cette discution! vraiement pas mal du tout!!!",
							"02/12/1202",
							""
							]
	}';

    return json_decode($evenement);
}
