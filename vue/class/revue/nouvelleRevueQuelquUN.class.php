<?php

class NouvelleRevueDeQuelquUN{
    private $speudo;
    private $photo;
    private $retaurantCommente;
    private $dateDEcriture;
    private $noteRestau;
    private $texterevue;
    private $utilisateurSuitLaPersonne;
    private $lienPersonne;
    private $lienRestau;

    public function __construct($json){
        $this->speudo = $json[0];
        $this->photo = $json[1];
        $this->retaurantCommente = $json[2];
        $this->dateDEcriture = $json[3];
        $this->noteRestau = $json[4];
        $this->texterevue = $json[5];
        $this->utilisateurSuitLaPersonne = $json[6];
        $this->lienPersonne = $json[7];
        $this->lienRestau = $json[8];
    }

    public function affiche(){

    }
}