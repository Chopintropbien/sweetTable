<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/27/14
 * Time: 9:18 AM
 */

class ProfilNotification {

    protected $photoProfil;
    protected $speudo;
    protected $villeOuEstLaPersonne;
    protected $nbVoteCool;
    protected $nbvoteUtile;
    protected $nbVoteDrole;
    protected $nbAmis;
    protected $nbRevus;
    protected $nbEvenementOrganise;
    protected $nbCompliment;
    protected $nbFollower;
    protected $nbLienPourProfilPlusComplet;

    public  function __construct($json){
        $this->photoProfil = $json[0];
        $this->speudo = $json[1];
        $this->villeOuEstLaPersonne = $json[2];
        $this->nbVoteCool = $json[3];
        $this->nbvoteUtile = $json[4];
        $this->nbVoteDrole = $json[5];
        $this->nbAmis = $json[6];
        $this->nbRevus = $json[7];
        $this->nbEvenementOrganise = $json[8];
        $this->nbCompliment = $json[9];
        $this->nbFollower = $json[10];
        $this->nbLienPourProfilPlusComplet = $json[11];

    }

    public function affiche(){
        include('../vue/class/profil/francais/profilNotification.php');
        include('vue/class/profil/francais/profilNotification.php');

        echo '<aside id="profil">';
                // partie du haut avec le speudo et la ville
            echo '<div>';
                echo '<a href="'.$this->nbLienPourProfilPlusComplet.'">';
                    echo '<h2>'.$this->speudo.'</h2>';
                echo '</a>';
                echo '<p>'.$this->villeOuEstLaPersonne.'</p>';
            echo '</div>';


            echo '<article>';
                echo '<img src="http://localhost/Meittopi/image/profil_vide.png"/>'; // photo de profil
                // liste des notifications
                echo '<section>';

                        // liste de gauche (votes)
                    echo '<ul>';
							// nombre de vote util
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/ampoule.png"/>';
                            echo '<p>'.$this->nbvoteUtile.$votesUtils.'</p>';
                        echo '</li>';
							// nombre de vote drole
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/drole.png"/>';
                            echo '<p>'.$this->nbVoteDrole.$votesdrole.'</p>';
                        echo '</li>';
							// nombre de vote cool
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/cool.png"/>';
                            echo '<p>'.$this->nbVoteCool.$votesCool.'</p>';
                        echo '</li>';
                    echo '</ul>';

						// lsite du millieu (amis)
                    echo '<ul>';
							// nombre d'amis
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/population.png"/>';
                            echo '<p>'.$this->nbAmis.$amis.'</p>';
                        echo '</li>';
							// nombre de compliment
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/olive_wreath.png"/>';
                            echo '<p>'.$this->nbCompliment.$compliment.'</p>';
                        echo '</li>';
							// nombre de followers
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/follower.png"/>';
                            echo '<p>'.$this->nbFollower.$followers.'</p>';
                        echo '</li>';
                    echo '</ul>';

						// liste de droite (revue)
                    echo '<ul>';
							// nombre de revus
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/revue.png"/>';
                            echo '<p>'.$this->nbRevus.$revus.'</p>';
                        echo '</li>';
							// nombre de sortie
                        echo '<li>';
                            echo '<img src="http://localhost/Meittopi/image/profil/sortie.png"/>';
                            echo '<p>'.$this->nbEvenementOrganise.$sortie.'</p>';
                        echo '</li>';
                    echo '</ul>';
                    
                    
                echo '<section>';
            echo '</article>';

        echo '</aside>';

    }


} 
