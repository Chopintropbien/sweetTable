<?php


class Publication_photo{

    protected $photo1;
    protected $photo2;
    protected $photo3;

    protected function __construct($photo2, $photo1, $photo3){
        if($photo1) $this->photo1 = $photo1;
        if($photo2) $this->photo2 = $photo2;
        if($photo3) $this->photo3 = $photo3;
    }

    protected function afficher_photo(){
        // photo
        echo '<section class="publication_photo">';
        if($this->photo1) echo ' <a href="'.$this->photo1.'"> <img src="'.$this->photo1.'"/> </a>';
        if($this->photo2) echo '<a href="'.$this->photo2.'"> <img src="'.$this->photo2.'"/> </a>';
        if($this->photo3) echo '<a href="'.$this->photo3.'"> <img src="'.$this->photo3.'"/> </a>';
        echo '</section>';
    }
}