<?php

class Profil{
    private $nom;
    private $lieu_habitation;
    private $photo;

    public function __construct($profil_JSON, $complet = true){
        echo $profil_JSON;
        $this->nom = 'Lauriane Mollier';
        $this->lieu_habitation = 'Lausanne';
        $photo = $profil_JSON->picture;
        if($photo) $this->photo = $photo;
        else $this->photo = $_SESSION['photo_profil_vide'];
    }
    public function affiche($id){
        echo '<aside id="'.$id.'" class=""profil>';
        echo '<img src="'.$this->photo.'"/>';
        echo '<h1>'.$this->nom.'</h1>';
        echo '<h2>'.$this->lieu_habitation.'</h2>';
        echo '</aside>';
    }
}