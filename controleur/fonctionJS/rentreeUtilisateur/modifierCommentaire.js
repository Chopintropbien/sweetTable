
//mettre que les id sans le numero
// le numero doit toujours etre au debut de l'id: ex: 2texte

//TODO: verifier les failles xss

function modifierCommentaire(idButtonModifierCommentaire,
                             idParagrpaheCommentaire,
                             idTextArea,
                             idButtonAnnuler,
                             idButtonValider,
                             adresseServeur,
                             i){

    var buttonModifierCommentaire = document.getElementById(i + idButtonModifierCommentaire);

    // transforme la balise p en texteare, tout en gardant le texte dedant si on click sur le balise p
    addEvent(buttonModifierCommentaire, 'click',function(){
        var i = this.id[0];

        var paragrapheCommentaire = document.getElementById(i + idParagrpaheCommentaire);
        var texte = paragrapheCommentaire.innerHTML;

        this.style.display = 'none';
        paragrapheCommentaire.style.display = 'none';

        var textArea =  document.getElementById(i + idTextArea);
        var buttonValider = document.getElementById(i + idButtonValider);
        var buttonAnnuler = document.getElementById(i + idButtonAnnuler);

        textArea.style.display = 'block';
        textArea.value = texte;
        textArea.focus();

        buttonValider.style.display = 'inline-block';
        buttonAnnuler.style.display = 'inline-block';
    });




    var buttonValider = document.getElementById(i + idButtonValider);

    // transforme la balise textearea en p, tout en gardant le texte dedant si on click sur le button valider
    addEvent(buttonValider, 'click',function(){ //TODO: ajouter l'envoie au serveur
        var i = this.id[0];

        var textArea =  document.getElementById(i + idTextArea);
        var texte = textArea.value;

        this.style.display = 'none';
        textArea.style.display = 'none';
        document.getElementById(i + idButtonAnnuler).style.display = 'none';

        var texteContenant = document.getElementById(i + idParagrpaheCommentaire);

        texteContenant.style.display = 'block';
        texteContenant.innerHTML = texte;

        var buttonModifierCommentaire = document.getElementById(i + idButtonModifierCommentaire);
        buttonModifierCommentaire.style.display = 'block';

    });



    var buttonAnnuler = document.getElementById(i + idButtonAnnuler);
    // annule les modification
    addEvent(buttonAnnuler, 'click',function(){
        if(confirm("Etes-vous sûr d'annuler?")){ // TODO: Francais
            var i = this.id[0];

            // efface tout
            this.style.display = 'none';
            document.getElementById(i + idTextArea).style.display = 'none';
            document.getElementById(i + idButtonValider).style.display = 'none';

            // affiche tout
            document.getElementById(i + idParagrpaheCommentaire).style.display = 'block';

            var buttonModifierCommentaire = document.getElementById(i + idButtonModifierCommentaire);
            buttonModifierCommentaire.style.display = 'block';
        }

    });


}
