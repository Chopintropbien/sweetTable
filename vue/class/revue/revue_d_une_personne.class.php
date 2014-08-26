<?php

include_once('vue/class/publication/publication_photo.class.php');
include_once('vue/class/restaurant/restaurant_basic.class.php');

include_once('controller/fonction_annexe/date_publication.php');

class Revue_d_une_personne extends Publication_photo{

    private $restaurant;

    private $uid_restaurant;
    private $uid_revue;
    private $titre_revue;
    private $texte_revue;

    private $date_publication;

    public function __construct($nom, $photo, $note, $prix, $nb_avis, $liste_cathegorie, $uid_restaurant,
                                $uid_revue, $titre_revue, $texte_revue, $date_publication, $photo2, $photo1, $photo3){

        parent::__construct($photo2, $photo1, $photo3);

        $this->restaurant = new Restaurant_basic($nom, $photo, $note, $prix, $nb_avis, $liste_cathegorie, $uid_restaurant);

        $this->uid_restaurant = $uid_restaurant;
        $this->uid_revue = $uid_revue;
        $this->titre_revue = $titre_revue;
        $this->texte_revue = $texte_revue;
        $this->date_publication = date_publication($date_publication);

    }

    public function affiche($i, $modifier_revue = false){


        echo '<aside><time>'.$this->date_publication.'</time></aside>';
        echo '<div class="restaurant">';
            $this->restaurant->affiche($i);
        echo '</div>';

        echo '<h5>'.$this->titre_revue.'</h5>';
        echo '<p>'.$this->texte_revue.'</p>';

        parent::afficher_photo();

        // modifier les revue
        if ($modifier_revue) echo '<aside><a href="'.$GLOBALS['host'].'/editer-une-revue.php?uid='. $this->uid_restaurant.'&uid_revue='.$this->uid_revue.'"> Modifier</a></aside>';

    }

}