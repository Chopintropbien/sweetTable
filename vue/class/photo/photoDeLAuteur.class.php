<?php

class PhotoDeLAuteur{
    private $photo;
    private $speudoAuteur;
    private $lienAuteur;


    public function __construct($json){
        $this->photo = $json[0];
        $this->speudoAuteur = $json[1];
        $this->lienAuteur = $json[2];
    }

    public function affiche($i){
        echo '<img src="'.$this->photo.'"/>';
        echo '<p> Par <a href="'.$this->lienAuteur.'">'.$this->speudoAuteur.'</a> </p>'; //TODO: francais
    }
}