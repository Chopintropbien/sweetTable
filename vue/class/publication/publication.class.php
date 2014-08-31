<?php

include_once('vue/class/publication/publication_photo.class.php');

include_once('controller/fonction_annexe/date_publication.php');
class Publication extends Publication_photo{
    private $nom_personne_qui_publie;
    private $photo_profil;
    private $uid_personne_publie;

    private $date_ecriture;

    private $restaurant_nom;
    private $uid_restaurant;

    private $titre;


    protected  function __construct($nom_personne_qui_publie, $photo_profil, $uid_personne_publie, $date_ecriture,
                                    $restaurant_nom, $uid_restaurant, $titre, $photo1, $photo2, $photo3){
        parent::__construct($photo1, $photo2, $photo3);

        $this->nom_personne_qui_publie = $nom_personne_qui_publie;

        if($photo_profil) $this->photo_profil = $photo_profil;
        else $this->photo_profil = $_SESSION['photo_profil_vide'];

        $this->uid_personne_publie = $uid_personne_publie;
        $this->date_ecriture = date_publication($date_ecriture);
        $this->restaurant_nom = $restaurant_nom;
        $this->uid_restaurant = $uid_restaurant;
        $this->titre = $titre;
    }

    // affiche_personne -> affiche la photo et le nom de ce lui qui a ecrit la revue
    protected function affiche_debut($i, $class_publication, $texte_action, $affiche_personne){

        echo '<div class = "'.$class_publication. '">';
            if($affiche_personne) echo '<img src="'.$this->photo_profil.'"/>';

            // si on affiche la photo, l'article a droite doit se reduite de taille
            if($affiche_personne) echo '<article class="avec_personne">';
            else echo '<article class="sans_personne">';
                echo '<time>'.$this->date_ecriture.'</time>';

                echo '<h5>'.$this->titre.'</h5>';

                // titre
                echo '<h6>';
                    if($affiche_personne){
                        echo '<a href="'.$GLOBALS['host'].'/profil.php?uid='.$this->uid_personne_publie.'">';
                            echo '<mark>'.$this->nom_personne_qui_publie.'</mark></a>';
                        echo '<span>'.$texte_action.'</span>';
                    }

                    echo '<a href="'.$GLOBALS['host'].'/restaurant.php?uid='.$this->uid_restaurant.'">';
                        echo '<mark>'.$this->restaurant_nom.'</mark></a>';
                echo '</h6>';
    }




    protected function affiche_fin(){
            echo '</article>';
        echo '</div>';
    }
}