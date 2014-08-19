<?php

include_once('vue/fonction_annexe/etoile/note_etoile.php');
include_once('vue/class/publication/publication.class.php');

class Publication_Revue extends Publication{
    private $note_restau;
    private $texte_revue;

    private $photo1;
    private $photo2;
    private $photo3;


    public function __construct($json){
        parent::__construct($json[0], $json[1], $json[2], $json[3], $json[4], $json[5], $json[6]);
        $this->note_restau = $json[7];
        $this->texte_revue = $json[8];

        $this->photo1 = 'http://localhost/Meittopi/image/profil_vide.png';
        $this->photo2 = 'http://localhost/Meittopi/image/profil_vide.png';
        $this->photo3 = 'http://localhost/Meittopi/image/profil_vide.png';
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


                // photo
                echo '<section>';
                    if($this->photo1) echo ' <a href="'.$this->photo1.'"> <img src="'.$this->photo1.'"/> </a>';
                    if($this->photo2) echo '<a href="'.$this->photo2.'"> <img src="'.$this->photo2.'"/> </a>';
                    if($this->photo3) echo '<a href="'.$this->photo3.'"> <img src="'.$this->photo3.'"/> </a>';
                echo '</section>';

        parent::affiche_fin();
    }
}
