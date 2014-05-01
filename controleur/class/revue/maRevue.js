
function modifierRevus(){

    var i = 0;
    while(document.getElementById('modifiercommentaire' + i)){

        var modifiercommentaire = document.getElementById('modifiercommentaire' + i);
        addEvent(modifiercommentaire, 'click',function(){
            var i = this.id[19];

            var texteCommentaire = document.getElementById('texteCommentaire'+ i);
            var textareaCommentaire = document.getElementById('textareaCommentaire'+ i);

            var commentaire = texteCommentaire.innerHTML;

            texteCommentaire.style.display = 'none';
            textareaCommentaire.style.display = 'block';
            textareaCommentaire.value = commentaire;

        });


        ++i;
    }



}
