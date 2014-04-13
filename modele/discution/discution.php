<?php

/**
 * La liste est composé de discution. Une discution est un tableau de:
 *  1° Le speudo de celui qui a lancer la discution
 *  2° La photo de celui-ci
 *  3° Le titre de la discution
 *  4° Le texte de la discution (de celui qui a lancer la discution pas les reponses)
 *  5° La quategorie de la discution
 *  6° Le nombre de réponse à cette discution
 *  7° La date de la dernière réponse
 *  8° Lien de celui qui a fait la discution
 *  9° Lien de la discution
 */

function get_liste_discution(){
    $listeDiscution = '{
        "discution0" : [
            "Andreï Kucharavy",
            "http://localhost/Meittopi/image/profil_vide.png",
            "Le vie c est vraime trop génial!!!",
            "Sorie chez j aime comme tous les diamnche!!!!!!",
            "le bio",
            12,
            "14/02/2014",
            "ee",
            "http://localhost/meittopi/discution/pageDUneDiscution.php"
        ]
    }';

    return json_decode($listeDiscution);
}
