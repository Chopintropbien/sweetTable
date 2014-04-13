<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 4/12/14
 * Time: 1:41 PM
 */

class Discution {
    // le speudo et la photo de la personne sont celui qui a lancer la discution
    private $speudo;
    private $photo;
    private $titre;
    private $texte;
    private $categorie;
    private $nbReponse;
    private $dateDerniereReposne;
    private $lienPersonne;
    private $lienDiscution;

    private $afficherLaCategorie;

    public function __construct($json, $afficherLaCategorie){
        $this->speudo = $json[0];
        $this->photo = $json[1];
        $this->titre = $json[2];
        $this->texte = $json[3];
        $this->categorie = $json[4];
        $this->nbReponse = $json[5];
        $this->dateDerniereReposne = $json[6];
        $this->lienPersonne = $json[7];
        $this->lienDiscution = $json[8];

        $this->afficherLaCategorie = $afficherLaCategorie;
    }
        // if last, ne pas afficher la ligne separtrice
    public function affiche($i){
			// colonne de l'auteur 
        echo '<td class="auteur">';
	        echo '<a href="'.$this->lienPersonne.'">';
				echo '<img src="'.$this->photo.'">';
	        echo '</a>';
	        echo '<a href="'.$this->lienPersonne.'">';
				echo '<p>'. $this->speudo.'</p>';
	        echo '</a>';
        echo '</td>';
        
			// colonne de presentation de la conversation
        echo '<td class="conversation">';
			echo '<a href="'.$this->lienDiscution.'">';
				echo '<h4>'.$this->titre.'</h4>';
			echo '</a>';
			echo '<p>'.$this->texte.'</p>';
        echo '</td>';

        if( $this->afficherLaCategorie){
            // colonne pour la categorie de la conversation
            echo '<td class="categorieConversation">';
                echo '<a href="">'; // mettre le lien sur la page de la catégorie en question
                    echo '<p>'.$this->categorie.'</p>';
                echo '</a>';
            echo '</td>';
        }

        
			// colonne sur le nombre de reponse
        echo '<td class="reponse">'.$this->nbReponse.'</td>';
        
			// colonne sur le nombre de reponse
        echo '<td class="derniereReponse">'.$this->dateDerniereReposne.'</td>';

    }

} 
