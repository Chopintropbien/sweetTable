<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/27/14
 * Time: 10:24 AM
 */
include('profilNotification.class.php');
class ProfilComplet extends ProfilNotification {
    private $tableauDeCaracteristique;

    public function __construct($json){
        parent::__construct($json);
        $this->tableauDeCaracteristique = $json[12];
    }

    public function affiche(){
        include('../vue/class/profil/francais/profilComplet.php');

        echo '<article id="profil_profil">';
            parent::affiche(); // affiche les notifications du profil
            echo '<hr/>';

                // affiche la liste des caracteristique
            echo '<ul id="infoPersonnelles">';
                for($j = 0; $j<count($this->tableauDeCaracteristique); ++$j){
                    echo '<li>';
                        echo '<h6>'.$this->tableauDeCaracteristique[$j][0].'</h6>';
                        echo '<input type="button" value="+" class="petiteCroix"/>';
                        echo '<p>'.$this->tableauDeCaracteristique[$j][1].'</p>';
                        echo '<textarea style="display: none"> </textarea>';
                        echo  '<div style="display: none">'.$valider.' </div>';
                    echo '</li>';
                }
                    // zone de saisie
                echo '<li id="nouveauChamp" style="display: none">';
                    echo '<h5>'.$nouveauChamp.'</h5>';
                    echo '<input type="text" class="nouveauTitre"/>';
                    echo '<textarea> </textarea>';
                    echo  '<div>'.$valider.' </div>';
                echo '</li>';
                    // pour ajouter un champ
                echo '<li> <p id="ajouterUnChamp">'.$ajouterChamp.'</p> </li>';
            echo '</ul>';

        echo '</article>';
    }
} 