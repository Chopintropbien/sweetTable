
//TODO: verifier les failles xss

// permet de modifier ce qu'on a deja saisie pour une caraterisque
function modificationTexteDUneCaracteristique(i){
    var texteContenant = document.getElementById('texte' + i);

    // transforme la balise p en texteare, tout en gardant le texte dedant si on click sur le balise p
    addEvent(texteContenant, 'click',function(){
        var i = this.id[5];

        var texte = this.innerHTML;
        this.style.display = 'none';

        var textArea =  document.getElementById('textArea' + i);
        var buttonValider = document.getElementById('buttonValider' + i);
        var buttonAnnuler = document.getElementById('buttonAnnuler' + i);

        textArea.style.display = 'block';
        textArea.value = texte;

        buttonValider.style.display = 'inline-block';
        buttonAnnuler.style.display = 'inline-block';


    });

    var buttonValider = document.getElementById('buttonValider' + i);

    // transforme la balise textearea en p, tout en gardant le texte dedant si on click sur le button valider
    addEvent(buttonValider, 'click',function(){ //TODO: ajouter l'envoie au serveur
        var i = this.id[13];

        var textArea =  document.getElementById('textArea' + i);
        var texte = textArea.value;

        this.style.display = 'none';
        textArea.style.display = 'none';
        document.getElementById('buttonAnnuler' + i).style.display = 'none';

        var texteContenant = document.getElementById('texte' + i);

        texteContenant.style.display = 'block';
        texteContenant.innerHTML = texte;

    });

    var buttonAnnuler = document.getElementById('buttonAnnuler' + i);
    // annule les modification
    addEvent(buttonAnnuler, 'click',function(){
        if(confirm("Etes-vous sûr d'annuler?")){ // TODO: Francais
            var i = this.id[13];

            // efface tout
            this.style.display = 'none';
            document.getElementById('textArea' + i).style.display = 'none';
            document.getElementById('buttonValider' + i).style.display = 'none';

            // affiche tout
            document.getElementById('texte' + i).style.display = 'block';
        }

    });

    var petiteCroix = document.getElementById('petiteCroix' + i);
    // si on click sur la petite crois, on efface la caracteristique

    addEvent(petiteCroix, 'click',function(){
        if(confirm("Etes-vous sûr de suprimer cette partie?")){ // TODO: Francais
            var i =  0;
            while(document.getElementById('texte' + i)){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

            var parentLi = this.parentNode;
            parentLi.parentNode.removeChild(parentLi);
        }
        //TODO: envoyer au serveur


    });


}

// permet de modifier ce qu'on a deja saisie pour tout la page
function modificationTexteCaracteristique(){

    var i =  0;
    while(document.getElementById('texte' + i)){
        modificationTexteDUneCaracteristique(i);
        ++i;
    }

}





// fait apparaitre une nouvelle zone de saisie
function nouvelleZoneSaisie(){

    var nouvelleZoneSaisie = document.getElementById('ajouterUnChamp');

    addEvent(nouvelleZoneSaisie, 'click',function(){
        var nouvelleLi = document.createElement('li');

        var contenantLi = '<h5> Nouveau champ </h5>'; // TODO: francais
        contenantLi += '<input type="text" class="nouveauTitre" placeholder="Titre" id="nouveauTitre"/>'; // TODO: francais
        contenantLi += '<textarea id="nouveauTexte"></textarea>';
        contenantLi += '<div id="validerNouvelleCaracteristique" class ="buttonValider"> Valider </div>'; // TODO: francais
        contenantLi += '<div id="annulerNouvelleCaracteristique"> Annuler </div>'; // TODO: francais

        nouvelleLi.innerHTML = contenantLi;

        var i =  0;
        while(document.getElementById('texte' + i)){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

        nouvelleLi.id = 'nouvelleLi' +i;

        document.getElementById('infoPersonnelles').appendChild(nouvelleLi);

        this.style.display = 'none';
        document.getElementById('nouveauTitre').focus();

        // quand l'utilisateur valide cela integre ce qu'il a mis dans la liste des caracteristique
        var validerNouvelleCaracteristique = document.getElementById('validerNouvelleCaracteristique');
        addEvent(validerNouvelleCaracteristique, 'click',function(){

            var i =  0;
            while(document.getElementById('texte' + i)){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

            var nouvelleLi = document.getElementById('nouvelleLi' + i);
            var nouveauTitre = document.getElementById('nouveauTitre').value;
            var nouveauTexte = document.getElementById('nouveauTexte').value;

            if(nouveauTitre == ''){
                alert('Vous n\'avez pas écrit de titre'); // TODO: francais
            }
            else if(nouveauTexte == ''){
                alert('Vous n\'avez pas ajouté de description'); // TODO: francais
            }
            else{
                var nouveauContenantLi = '<h6>'+ nouveauTitre +'</h6>';
                nouveauContenantLi += '<input type="button" value="+" class="petiteCroix" id="petiteCroix'+ i +'"/>';

                // texte affiché
                nouveauContenantLi += '<p id="texte'+ i +'">'+ nouveauTexte +'</p>';

                // zone de saisie pour le texte
                nouveauContenantLi += '<textarea id="textArea'+ i +'" style="display: none" > </textarea>';
                nouveauContenantLi += '<div id="buttonValider'+ i +'" style="display: none" class ="buttonValider"> Valider </div>'; // TODO: francais
                nouveauContenantLi += '<div id="buttonAnnuler'+ i +'" style="display: none"> Annuler </div>'; // TODO: francais

                    nouvelleLi.innerHTML = nouveauContenantLi;

                document.getElementById('ajouterUnChamp').style.display = 'block';

                modificationTexteDUneCaracteristique(i);

            }


        });

        // si l'utilisateur veux annuler le fait d'ajouter une Nouvelle caracterisque
        var annulerNouvelleCaracteristique = document.getElementById('annulerNouvelleCaracteristique');
        addEvent(annulerNouvelleCaracteristique, 'click',function(){
            if(confirm("Etes-vous sûr d'annuler?")){ // TODO: Francais
                var i =  0;
                while(document.getElementById('texte' + i)){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

                var nouvelleLi = document.getElementById('nouvelleLi' + i);
                nouvelleLi.parentNode.removeChild(nouvelleLi);

                document.getElementById('ajouterUnChamp').style.display = 'block';
            }
        });

    });
}