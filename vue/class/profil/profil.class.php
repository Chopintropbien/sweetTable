<?php

class Profil{
    private $nom;
    private $lieu_habitation;
    private $photo;

    public function __construct($profil_JSON, $complet = true){
        $this->nom = $profil_JSON->name;
        $this->lieu_habitation = $profil_JSON->location;

        if($profil_JSON->picture) $this->photo = 'data:image/png;base64,' . $profil_JSON->picture[0]->thumbnail;
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