function modifierEtEditerRevus(){
    var i = 0;
    while(document.getElementById(i + 'elementListe')){

        // pour pouvoir modifier le commentaire
        if(document.getElementById(i + 'modifierCommentaire')){

            modifierCommentaire('modifierCommentaire',
                'texteCommentaire',
                'textareaCommentaire',
                'annulerCommentaire',
                'validerCommentaire',
                '',
                i);

            editerRevus(i);
        }

        //supprimer les element de la liste
        supprimerParentNode('fermerElement', i);


        ++i;
    }
}

function editerRevus(i){


}