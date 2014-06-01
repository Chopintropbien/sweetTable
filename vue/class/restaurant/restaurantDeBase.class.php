<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 5/30/14
 * Time: 12:49 PM
 */

class RestaurantDeBase {
    protected $nom;
    protected $photo;
    protected $note;
    protected $prix;
    protected $nbAvis;
    protected $listeCathegorie;
    protected $listeEvenement;
    protected $lienRestau;

    public function __construct($restaurantJSON){
        if(is_array($restaurantJSON)){
            $this->nom = $restaurantJSON[0];
            $this->photo = $restaurantJSON[1];
            $this->note = $restaurantJSON[2];
            $this->prix = $restaurantJSON[3];
            $this->nbAvis = $restaurantJSON[4];
            $this->listeCathegorie = $restaurantJSON[5];
            $this->listeEvenement = $restaurantJSON[11];
            $this->lienRestau = $restaurantJSON[10];
        }
    }

    protected  function affichePartieDroitePhoto($i){
        include('francais/restaurantRecherche.php');

                echo '<article>'; // info restau

                    echo '<article>'; // tire restau
                        echo '<p>'. ($i+1).'. </p>';
                        echo '<a href="'.$this->lienRestau.'"><h4>'.$this->nom.'</h4></a>';
                    echo'</article>';

                echo '<div>'; // etoile et nobre d'avis
                    echo '<div>'; // note
                        NoteEtoile::afficheEtoile($this->note, 23);
                    echo '</div>';
                    echo '<p>'. $this->nbAvis .$avis. '</p>';
                echo'</div>';

                echo '<section>'; // prix et cathegorie
                    // pris
                    $prix = '';
                    for($j=0; $j<$this->prix; ++$j){ $prix = $prix . '$';}
                    echo '<div>'.$prix.'</div>';

                    // categorie
                    $nbCathegorie = count($this->listeCathegorie);
                    $cathegorie = '';
                    for($j=0; $j<$nbCathegorie; ++$j){
                        $cathegorie = $cathegorie . $this->listeCathegorie[$j];
                        if(!($j == $nbCathegorie-1)){ $cathegorie = $cathegorie . ', '; }
                    }
                    echo '<p>'.$cathegorie.'</p>';

                    echo ' <span id="'.$i.'croixApparitionElement">+</span>';
                echo'</section>';

                // evenement caché
                echo '<aside id="'.$i.'evenement" style="display: none;">';
                    $listeEvenement = count($this->listeEvenement);
                    for($j=0; $j<$listeEvenement; ++$j){
                        echo '<a> <h6>'.$this->listeEvenement[$j][0].':</h6>'.$this->listeEvenement[$j][1].'</a>';
                    }

                echo '</aside>';
            echo'</article>';


    }

    public  function affiche($i){
        echo '<img src="'.$this->photo .'"></img>';

        echo '<section>'; // a droite de la photo
            $this->affichePartieDroitePhoto($i);
        echo '</section>';
    }



} 