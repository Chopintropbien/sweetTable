<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 4/16/14
 * Time: 8:41 AM
 */

class CommentaireAmelioration {
    private $photoProfil;
    private $speudo;
    private $commentaire;
    private $nbPersonnePour;
    private $nbPersonnePourMax;
    private $nbPersonneContre;
    private $nbPersonneContreMax;
    private $utilisateurAime;
    private $utilisateurAimePas;
    private $lienPersonne;

    public function __construct($json){
        $this->photoProfil = $json[0];
        $this->speudo = $json[1];
        $this->commentaire = $json[2];
        $this->nbPersonnePour = $json[3];
        $this->nbPersonnePourMax = $json[4];
        $this->nbPersonneContre = $json[5];
        $this->nbPersonneContreMax = $json[6];
        $this->utilisateurAime = $json[7];
        $this->utilisateurAimePas = $json[8];
        $this->lienPersonne = $json[10];

    }


    public function affiche($i){
        include('../vue/class/propositionAmelioration/francais/commentaireAmelioration.php');
        include('../vue/class/propositionAmelioration/francais/propositionAmelioration.php');



        //photo
        echo '<div>';
            echo '<img src="'.$this->photoProfil.'">';
            echo '<a href="'.$this->lienPersonne.'"><p>'.$this->speudo.'</a></p>';
        echo '</div>';

        // partie de description de la propostion
        echo '<p>'.$this->commentaire.'</p>';


        echo '<aside>';
        echo '<ul>';

        // si les personne votre encore pour ou contre
        if($this->nbPersonnePour < $this->nbPersonnePourMax
            && $this->nbPersonneContre < $this->nbPersonneContreMax){

            // colorie le pouce en vert si l'utilisateur a voté pour
            if($this->utilisateurAime){
                $photoPouceHaut = $photoPouceHautVert;
            }
            else{
                $photoPouceHaut = $photoPouceHautBlanc;
            }


            echo '<li>';
                echo '<div>';
                    echo '<p>'.$pour.'</p>';
                    echo '<canvas title="5/10" width="100" height="10" id="canvasnbPour0"></canvas>';
                echo '</div>';
                echo '<img class="pouceHaut" src="'.$photoPouceHaut.'">';
            echo '</li>';

            // colorie le pouce en vert si l'utilisateur a voté pour
            if($this->utilisateurAimePas){
                $photoPouceBas = $photoPouceBasRouge;
            }
            else{
                $photoPouceBas = $photoPouceBasBlanc;
            }

            echo '<li>';
                echo '<div>';
                echo '<p>'.$contre.'</p>';
                    echo '<canvas title="5/10" width="100" height="10" id="canvasnbPour0"></canvas>';
                echo '</div>';
                echo '<img class="pouceBas" src="'.$photoPouceBas.'">';
            echo '</li>';
        }

        // en devellopement
        if($this->nbPersonnePour >= $this->nbPersonnePourMax
            && $this->nbDon >= $this->nbDonMax){
            echo '<li>';
                echo '<img class="enDevellopementImage" src="'.$photoTravaux.'">';
                echo '<h6 class="enDevellopementTitre">'.$commPrisEncompte.'</h6>';
            echo '</li>';
        }

        // annulé
        if($this->nbPersonneContre >= $this->nbPersonneContreMax){
            echo '<li class="annule">';
                echo '<img class="annule" src="'.$photoCroix.'">';
                echo '<h6>'.$commPasPrisEnCompte.'</h6>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</aside>';

    }
} 