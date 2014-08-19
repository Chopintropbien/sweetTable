<?php

include_once('vue/fonction_annexe/etoile/note_etoile.php');

class Restaurant_basic {
    protected $nom;
    protected $photo;
    protected $note;
    protected $prix;
    protected $nb_avis;
    protected $liste_cathegorie;
    protected $uid_restaurant;

    public function __construct($restaurantJSON){
        if(is_array($restaurantJSON)){
            $this->nom = $restaurantJSON[0];
            $this->photo = $restaurantJSON[1];
            $this->note = $restaurantJSON[2];
            $this->prix = $restaurantJSON[3];
            $this->liste_cathegorie = $restaurantJSON[5];
            $this->uid_restaurant = $restaurantJSON[6];

            // si avis = -1 -> pas afficher avis
            if($restaurantJSON[4] == -1) $this->nb_avis = '';
            else $this->nb_avis = $restaurantJSON[4] . ' avis';
        }
    }
    // if $ecrire une revue => apparait le button ecrire une revue
    protected  function affichePartieDroitePhoto($i, $ecrire_revue = false, $class_conplet_ou_basic = 'restaurant_basic'){
        include('francais/restaurantRecherche.php');

        echo '<article class="'.$class_conplet_ou_basic.'">'; // info restau

            echo '<article>'; // tire restau
                echo '<p>'. ($i+1).'. </p>';
                echo '<a><h4>'.$this->nom.'</h4></a>';
                if ($ecrire_revue) echo '<button type="button"> Ecrire une revue </button>';
            echo'</article>';

            echo '<div>'; // etoile et nobre d'avis
                echo '<div>'; // note
                    note_etoile($this->note, 23);
                echo '</div>';
                echo '<p>'. $this->nb_avis.'</p>';
            echo'</div>';

            echo '<section>'; // prix et cathegorie
                // pris
                $prix = '';
                for($j=0; $j<$this->prix; ++$j){ $prix = $prix . '$';}
                echo '<div>'.$prix.'</div>';

                // categorie
                $nbCathegorie = count($this->liste_cathegorie);
                $cathegorie = '';
                for($j=0; $j<$nbCathegorie; ++$j){
                    $cathegorie = $cathegorie . $this->liste_cathegorie[$j];
                    if(!($j == $nbCathegorie-1)){ $cathegorie = $cathegorie . ', '; }
                }
                echo '<p>'.$cathegorie.'</p>';

             echo'</section>';



        echo'</article>';


    }
    // if $ecrire une revue => apparait le button ecrire une revue
    public  function affiche($i, $ecrire_revue = false){
        echo '<img src="'.$this->photo .'"></img>';

        echo '<section>'; // a droite de la photo
            $this->affichePartieDroitePhoto($i, $ecrire_revue);
        echo '</section>';
    }



} 