<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 4/12/14
 * Time: 1:41 PM
 */

class DiscutionEntreAmis {
    // le speudo et la photo de la personne sont celui qui a lancer la discution
    private $speudo;
    private $photo;
    private $texte;
    private $lienPersonne;

    private $afficherLaCategorie;

    public function __construct($json){
        $this->photo = $json[0];
        $this->speudo = $json[1];
        $this->texte = $json[2];
        $this->dateDePublication = $json[3];
        $this->lienPersonne = $json[4];
    }
    // if last, ne pas afficher la ligne separtrice
    public function affiche($i){
        echo '<div>';
        echo '<img src="'.$this->photo.'">';
        echo '<a href="'.$this->lienAuteur.'">';
        echo '<p>'.$this->speudoAuteurDiscution .'</p>';
        echo '</a>';
        echo '</div>';

        echo '<article>';
        echo '<p>'.$this->texte.'</p>';
        echo '<time>'.$this->dateDePublication.'</time>';
        echo '</article>';
    }

} 
