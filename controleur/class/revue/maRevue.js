
function modifierEtEditerRevus(){

    var i = 0;
    while(document.getElementById(i + 'modifiercommentaire')){

        modifierCommentaire('modifiercommentaire',
            'texteCommentaire',
            'textareaCommentaire',
            'annulerCommentaire',
            'validerCommentaire',
            '',
            i);

        editerRevus(i);

        ++i;
    }
}

function editerRevus(i){


}
