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

    // ajouter $idDifferanteListe s'il y a plusieur liste sur la meme page
    public function affiche($i, $idDifferanteListe){
        include('../vue/class/amis/francais/amis.php');

        echo '<img src="'.$this->photo.'"/>';

        echo '<article>'; // a droite de la photo
            echo '<h6> <a>'.$this->speudo.'</a> </h6>';
            echo '<p>'.$this->villeDHabitation.'</p>';

            echo '<p> Né(e) le'.$this->dateNaissance.'</p>';

            if($this->amisAvecUtilisateur){
                echo '<p id="'.$i.'nbRevus'.$idDifferanteListe.'"> '.$this->nombreRevus.$revus.'</p>';
                echo '<div id="'.$i.'nbAmiEnCommun'.$idDifferanteListe.'" style="display: none;" >'.$this->nbAmisEnCommun.' amis en commun</div>';
            }
            else{
                echo '<p id="'.$i.'nbRevus'.$idDifferanteListe.'" style="display: none;"> '.$this->nombreRevus.$revus.'</p>';
                echo '<div id="'.$i.'nbAmiEnCommun'.$idDifferanteListe.'">'.$this->nbAmisEnCommun.' amis en commun</div>';
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
            echo '<img src="'.$imageCareChek.'" id="'.$i.'imageCareChek'.$idDifferanteListe.'"/>';
            echo '<p id="'.$i.'textAcImage'.$idDifferanteListe.'">'.$textAcImage.'</p>';

        echo'</section>';


    }

}
















