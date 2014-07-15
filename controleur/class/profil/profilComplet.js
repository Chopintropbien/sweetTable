
//TODO: verifier les failles xss

// permet de modifier ce qu'on a deja saisie pour une caraterisque
function modificationTexteDUneCaracteristique(i){

    modifierCommentaire('texte',
        'texte',
        'textArea',
        'buttonAnnuler',
        'buttonValider',
        'http://localhost/meittopi/modele/profil/monProfil/modifierChamp.php', i);

    supprimerParentNode('petiteCroix', i);

}

// permet de modifier ce qu'on a deja saisie pour tout la page
function modificationTexteCaracteristique(){
    var i =  0;
    while(document.getElementById(i + 'texte')){
        modificationTexteDUneCaracteristique(i)
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
        while(document.getElementById(i + 'texte')){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

        nouvelleLi.id = i + 'nouvelleLi';

        document.getElementById('infoPersonnelles').appendChild(nouvelleLi);

        this.style.display = 'none';
        document.getElementById('nouveauTitre').focus();

        // quand l'utilisateur valide cela integre ce qu'il a mis dans la liste des caracteristique
        var validerNouvelleCaracteristique = document.getElementById('validerNouvelleCaracteristique');
        addEvent(validerNouvelleCaracteristique, 'click',function(){

            var i =  0;
            while(document.getElementById(i + 'texte')){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

            var nouvelleLi = document.getElementById(i + 'nouvelleLi');
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
                nouveauContenantLi += '<input type="button" value="+" class="petiteCroix" id="'+ i +'petiteCroix"/>';

                // texte affiché
                nouveauContenantLi += '<p id="'+ i +'texte">'+ nouveauTexte +'</p>';

                // zone de saisie pour le texte
                nouveauContenantLi += '<textarea id="'+ i +'textArea" style="display: none" > </textarea>';
                nouveauContenantLi += '<div id="'+ i +'buttonValider" style="display: none" class ="buttonValider"> Valider </div>'; // TODO: francais
                nouveauContenantLi += '<div id="'+ i +'buttonAnnuler" style="display: none"> Annuler </div>'; // TODO: francais

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
                while(document.getElementById(i + 'texte')){ ++i} // compte combien il y a de caraterisque (utile pour ensuite pouvoir modifier)

                var nouvelleLi = document.getElementById(i + 'nouvelleLi');
                nouvelleLi.parentNode.removeChild(nouvelleLi);

                document.getElementById('ajouterUnChamp').style.display = 'block';
            }
        });

    });
}