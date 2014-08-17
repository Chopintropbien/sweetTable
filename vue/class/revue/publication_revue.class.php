<?php

include_once('vue/fonction_annexe/etoile/note_etoile.php');
include_once('vue/class/publication/publication.class.php');

class Publication_Revue extends Publication{
    private $note_restau;
    private $texte_revue;

    public function __construct($json){
        parent::__construct($json[0], $json[1], $json[2], $json[3], $json[4], $json[5], $json[6]);
        $this->note_restau = $json[7];
        $this->texte_revue = $json[8];
    }

    public function affiche($i){
        include('vue/class/revue/francais/nouvelleRevueDeQuelquUn.php');

        parent::affiche_debut($i, 'publication_revue', 'a écrit sur');

				// etoile
				echo '<div>';
                    note_etoile($this->note_restau, 30);
				echo '</div>';

				// commentaire
				echo '<p>'.$this->texte_revue.'</p>';

	        echo '</article>';
        echo '</div>';

        parent::affiche_fin();
    }
}
