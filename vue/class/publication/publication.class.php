<?php

class Publication{
    private $nom_personne_qui_publie;
    private $photo_profil;
    private $uid_personne_publie;

    private $date_ecriture;

    private $restaurant_nom;
    private $uid_restaurant;

    private $titre;


    protected  function __construct($nom_personne_qui_publie, $photo_profil, $uid_personne_publie, $date_ecriture,
                                    $restaurant_nom, $uid_restaurant, $titre){
        $this->nom_personne_qui_publie = $nom_personne_qui_publie;
        $this->photo_profil = $photo_profil;
        $this->uid_personne_publie = $uid_personne_publie;
        $this->date_ecriture = $date_ecriture;
        $this->restaurant_nom = $restaurant_nom;
        $this->uid_restaurant = $uid_restaurant;
        $this->titre = $titre;
    }

    protected function affiche_debut($i, $class_publication, $texte_action){

        echo '<div class = "'.$class_publication. '">';
            echo '<img src="'.$this->photo_profil.'"/>';

            echo '<article>';
                echo '<time>'.$this->date_ecriture.'</time>';

                echo '<h5>'.$this->titre.'</h5>';

                // titre
                echo '<h6>';
                    echo '<a ><strong>'.$this->nom_personne_qui_publie.'</strong></a>';
                        echo '<span>'.$texte_action.'</span>';
                    echo '<a><mark>'.$this->restaurant_nom.'</mark></a>';
                echo '</h6>';
    }




    protected function affiche_fin(){
            echo '</article>';
        echo '</div>';
    }
}