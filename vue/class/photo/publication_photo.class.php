<?php

include_once('vue/class/publication/publication.class.php');

class Publication_photo extends Publication{

    private $photo1;
    private $photo2;
    private $photo3;


    public function __construct($json){
        parent::__construct($json[0], $json[1], $json[2], $json[3], $json[4], $json[5], $json[6]);
        $this->photo1 = $json[7];
        $this->photo2 = $json[8];
        $this->photo3 = $json[9];
    }

    public function affiche($i){

        parent::affiche_debut($i, 'publication_photo', 'a publier des photos sur');
            echo ' <a href="'.$this->photo1[1].'"> <img src="'.$this->photo1[0].'"/> </a>';
            if($this->photo2){
                echo '<section>';
                    echo '<a href="'.$this->photo2[1].'"> <img src="'.$this->photo2[0].'"/> </a>';
                    if($this->photo3){
                        echo '<a href="'.$this->photo3[1].'"> <img src="'.$this->photo3[0].'"/> </a>';
                    }
                echo '</section>';
            }
        parent::affiche_fin();

    }



}