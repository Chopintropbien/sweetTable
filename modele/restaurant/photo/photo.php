<?php
function get_liste_photo(){

    /*
     * Chaque photo se constitue de:
     *  1° Le lien de la photo
     *  2° La personne qui l'a posté
     *  3° Le lien pour cette personne
     */



    $liste_photo = '{

            "photo0" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo1" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo2" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo3" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo4" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo5" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo6" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo7" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "],
            "photo8" : [ "http://localhost/Meittopi/image/profil_vide.png", "Andreï Kucharavy", " "]

}';


    return json_decode($liste_photo);
}