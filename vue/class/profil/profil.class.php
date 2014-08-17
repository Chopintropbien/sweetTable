<?php

class Profil{
    private $nom;
    private $lieu_habitation;
    private $photo;

    public function __construct(){
        $this->nom = 'Lauriane Mollier';
        $this->lieu_habitation = 'Lausanne';
        $this->photo = 'http://localhost/Meittopi/image/profil_vide.png';
    }
    public function affiche($id){
        echo '<aside id="'.$id.'" class=""profil>';
        echo '<img src="'.$this->photo.'"/>';
        echo '<h1>'.$this->nom.'</h1>';
        echo '<h2>'.$this->lieu_habitation.'</h2>';
        echo '</aside>';
    }
}