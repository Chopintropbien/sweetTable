<?php

class Publication_photo{

    private $speudo;
    private $photoProfil;
    private $lienPersoneCreerEvenement;
    private $dateDEcriture;
    private $nomRestau;
    private $lienRestau;
    private $photo1;
    private $photo2;
    private $photo3;


    public function __construct($json){

        $this->speudo = $json[0];
        $this->photoProfil = $json[1];
        $this->lienPersoneCreerEvenement = $json[2];
        $this->dateDEcriture = $json[5];
        $this->nomRestau = $json[3];
        $this->lienRestau = $json[4];
        $this->photo1 = $json[6];
        $this->photo2 = $json[7];
        $this->photo3 = $json[8];
    }

    public function affiche($i){

        echo '<div class="publicationPhoto">';

        // photo de profil
        echo '<img src="' . $this->photoProfil .'"></img>';
        // article à droite de la photo
        echo '<article>';
            echo '<time>'. $this->dateDEcriture .'</time>';
            echo '<h6>'; // titre qui a fait l'evenement
                echo '<a id="lienPersonne'. $i .'" href="'.$this->lienPersoneCreerEvenement.'"><strong>'. $this->speudo. '</strong></a>'; // francais
                echo '<span class="aCreerUnEvenement"> a publier des photos sur </span>';
                echo '<a href="'.$this->lienRestau.'"><mark>'. $this->nomRestau. '</mark></a>';
            echo '</h6>';

            echo ' <a href="'.$this->photo1[1].'"> <img src="'.$this->photo1[0].'"/> </a>';
            if($this->photo2){
                echo '<section>';
                    echo '<a href="'.$this->photo2[1].'"> <img src="'.$this->photo2[0].'"/> </a>';
                    if($this->photo3){
                        echo '<a href="'.$this->photo3[1].'"> <img src="'.$this->photo3[0].'"/> </a>';
                    }
                echo '</section>';
            }
        echo '</article>';

        echo '</div>';
    }



}