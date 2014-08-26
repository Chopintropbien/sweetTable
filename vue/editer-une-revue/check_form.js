


(function (d){


    var element = document.getElementById('button_revue');
    element.onclick = function() {
        var check = [];

        check['choix_note'] = function(id){
            var note = d.getElementById(id).value;

            var commentaire = d.getElementById('commentaire');
            if (note == 0){
                commentaire.innerHTML = 'Veillez noter ce restaurant';
                commentaire.style.color = 'red';
            }
            else commentaire.style.color = 'black';
        }

        check['titre'] = function(id){
            var texte = d.getElementById(id);
            if (! /[^ \n\t]/.test(texte.value)){
                texte.placeholder = 'Veiller remplir ce champ';
                texte.style.border = '1px red solid';
            }
            else{
                texte.placeholder = '';
                texte.style.border = '1px silver inset';
            }
        }

        check['revue'] = check['titre'];

        var formulaire = document.getElementById('body');
        var result = true;
        for (var i in check){
            result = check[i](i) && result;
        }


        // si le formulaire ets bien remplis, alors faire l'envois des donne dans le fichier
        if(result){
            formulaire.submit();
        }
    }



})(document);