<?php

include_once('../vue/class/propositionAmelioration/propositionAmelioration.class.php');

class AmeliorationComplete extends PropositionAmelioration {
    private $auteur;
    private $lienAuteur;

    public function __construct($json){
        parent::__construct($json);
        $this->auteur = $json[14];
        $this->lienAuteur = $json[15];
    }

    public function affiche($i){

        // liste des photo
        echo '<article class="amelioration">';

        echo '<ul>';
            foreach($this->photo as $photo){
                echo '<li>';
                    echo '<img src="'.$photo.'">';
                echo '</li>';
            }
        echo '</ul>';
        parent::toutSaufPhoto($i);

        // auteur
        echo '<p>';
            echo 'Ecrit par:';
            echo '<cite> <a href="$this->lienAuteur">'.$this->auteur.'</a></cite>';
        echo '</p>';

        echo '</article>';

    }
} 