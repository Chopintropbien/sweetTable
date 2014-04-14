<?php

include_once('../vue/class/amis/amis.class.php');

class PersonneQuOnRecherche extends Amis{
    private $amisAvecUtilisateur;
    private $nbAmisEnCommun;
    private $dateNaissance;

    public function __construct($json){
        //TODO: mettre les fonctions de securite
        parent::__construct($json);
        $this->amisAvecUtilisateur = $json[5];
        $this->nbAmisEnCommun = $json[6];
        $this->dateNaissance = $json[7];

    }

    public function affiche($i){
        include('../vue/class/amis/francais/amis.php');

        echo '<img src="'.$this->photo.'"/>';

        echo '<article>'; // a droite de la photo
            echo '<h6> <a>'.$this->speudo.'</a> </h6>';
            echo '<p>'.$this->villeDHabitation.'</p>';

            if($this->amisAvecUtilisateur){
                echo '<p> Né(e) le'.$this->dateNaissance.'</p>';
                echo '<p> '.$this->nombreRevus.$revus.'</p>';
            }
            else{
                echo '<p> Né(e) le'.$this->dateNaissance.'</p>';
                echo '<div>'.$this->nbAmisEnCommun.' amis en commun</div>';
            }
        echo '</article>';

        echo'<section>';

            if($this->amisAvecUtilisateur){
                $imageCareChek = 'http://localhost/Meittopi/image/caseCheckRemplie.png';
                $textAcImage = 'Ami';
            }
            else{
                $imageCareChek = 'http://localhost/Meittopi/image/caseCheckVide.png';
                $textAcImage = 'Ajouter';
            }
            echo '<img src="'.$imageCareChek.'"/>';
            echo '<p>'.$textAcImage.'</p>';

        echo'</section>';


    }

}
















