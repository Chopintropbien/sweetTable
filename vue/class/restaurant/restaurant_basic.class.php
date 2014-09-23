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

    public function __construct($nom, $photo, $note, $prix, $nb_avis, $liste_cathegorie, $uid_restaurant){
        $this->nom = $nom;
        $this->note = $note;
        $this->prix = $prix;
        $this->liste_cathegorie = $liste_cathegorie;
        $this->uid_restaurant = $uid_restaurant;

        if($photo) $this->photo = $photo;
        else $this->photo = $_SESSION['photo_profil_vide'];

        // si avis = -1 -> pas afficher avis
        if($nb_avis == -1) $this->nb_avis = '';
        else $this->nb_avis = $nb_avis . ' avis';

    }
    // if $ecrire une revue => apparait le button ecrire une revue
    protected  function affichePartieDroitePhoto($i, $ecrire_revue = false, $class_conplet_ou_basic = 'restaurant_basic'){

        echo '<article class="'.$class_conplet_ou_basic.'">'; // info restau

            echo '<article>'; // tire restau
                echo '<p>'. ($i+1).'. </p>';
                echo '<a href="'.$GLOBALS['host'].'/restaurant.php?uid='.$this->uid_restaurant .'"><h4>'.$this->nom.'</h4></a>';
                if ($ecrire_revue) echo '<button type="button"> Ecrire une revue </button>';
            echo'</article>';

            echo '<div>'; // etoile et nobre d'avis
                echo '<div>'; // note
                    note_etoile($this->note, 24);
                echo '</div>';
                echo '<p>'. $this->nb_avis.'</p>';
            echo'</div>';

            echo '<section>'; // prix et cathegorie
                // pris
                $prix = '';
                for($j=0; $j<$this->prix; ++$j){ $prix = $prix . '$';}
                echo '<div>'.$prix.'</div>';

                // categorie
                include('vue/search/option/francais/array_name.php');
                $nbCathegorie = count($this->liste_cathegorie);
                $cathegorie = '';
                for($j=0; $j<$nbCathegorie; ++$j){
                    $cathegorie = $cathegorie . $cuisines_name[$this->liste_cathegorie[$j]];
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