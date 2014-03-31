<?php
/**
 * Created by PhpStorm.
 * User: lauriane
 * Date: 3/31/14
 * Time: 11:55 AM
 */

class Compliment {
    private $photo;
    private $speudo;
    private $date;
    private $compliment;
    private $restauConcerne;
    private $lienPersonne;
    private $lienRevus;
    private $lienRestau;

    public function __construct($json){
        // TODO: mettre les fonction securisantes
        $this->photo = $json[0];
        $this->speudo = $json[1];
        $this->date = $json[2];
        $this->compliment = $json[3];
        $this->restauConcerne = $json[4];
        $this->lienPersonne = $json[5];
        $this->lienRevus = $json[6];
        $this->lienRestau = $json[7];
    }

    public function  affiche(){
        include('../vue/class/compliment/francais/compliment.php');

        echo '<img src="'.$this->photo.'"/>'; // la photo
        echo '<article>';
            echo '<time>'.$this->date.'</time>'; // date
            echo '<h4>'.$deLaPartDe.'<a>'.$this->speudo.'</a></h4>'; // titre
            echo '<p>'.$this->compliment.'</p>'; // compliment
            echo '<div> <span> => </span>'.$surVotre.'<a>'.$revue.'</a>'.$sur.'<a>'.$this->restauConcerne.'</a></div>';

        echo '</article>';
    }

} 