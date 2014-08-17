
function autoComplexion(idInput, idTagResultatRecherche, lienFichierSelectionResultat) {

    var lieuRecherche = document.getElementById(idInput);
    var resultatRecherche = document.getElementById(idTagResultatRecherche);
    var selectedResult = -1;
    var previusSelectedResult = -1;
    var selectedClass = 'selected';
    var ancienneLettreTappe;
    var previousRequest;

    addEvent(document, 'click', function(){
        resultatRecherche.style.display = 'none';
    });

    function getResults(text){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', lienFichierSelectionResultat);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
            if (xhr.readyState == 4) { // TODO: ajouter  && xhr.status == 200
                alert
                displayResults(xhr.responseText);
            }
        };
        xhr.send('lieu=' + text);
        return xhr;
    }

    function displayResults(response){

        resultatRecherche.style.display = response.length ? 'block' : 'none';

        if(response.length){
            resultatRecherche.innerHTML = '';

            var responseTableau = response.split('|');
            for(var i = 0; i < responseTableau.length; ++i){
                var li = resultatRecherche.appendChild(document.createElement('li'));
                li.innerHTML = responseTableau[i];
                li.id = i + 'liAjax';

                addEvent(li, 'click', function(){
                    choiceResult(this);
                });

                addEvent(li, 'mouseover', function(){
                    if(selectedResult != -1){
                        previusSelectedResult = selectedResult;
                        document.getElementById(previusSelectedResult + 'liAjax').className = '';
                    }
                    selectedResult = parseInt(this.id[0]);
                    this.className = selectedClass;
                    lieuRecherche.value = this.innerHTML;
                });

                addEvent(li, 'mouseout', function(){
                    selectedResult = -1;
                    this.className = '';
                    lieuRecherche.value = ancienneLettreTappe;
                });

            }
        }
    }

    function choiceResult(choice){
        lieuRecherche.value = choice.innerHTML;
        resultatRecherche.innerHTML = '';
        resultatRecherche.style.display = 'none';
        selectedResult = -1;
        lancerRecherche();
    }

    function lancerRecherche(){
        //TODO: ne pas faire semblant
        alert('la requette fait semblais d etre lancer');
    }

    addEvent(lieuRecherche, 'keyup', function(e){

        var liProposition = resultatRecherche.childNodes;

        if(e.keyCode == 38){ // pour la touche haut

            if(selectedResult == 0){
                liProposition[selectedResult].className = '';
                selectedResult = -1;
                lieuRecherche.value = ancienneLettreTappe;
            }
            else if (selectedResult == -1){
                selectedResult = liProposition.length -1;
                liProposition[selectedResult].className = selectedClass;
                lieuRecherche.value = liProposition[selectedResult].innerHTML;
            }
            else{
                liProposition[selectedResult].className = '';
                selectedResult = selectedResult -1;
                liProposition[selectedResult].className = selectedClass;
                lieuRecherche.value = liProposition[selectedResult].innerHTML;
            }
        }

        else if(e.keyCode == 40){ // pour la touche bas

            if(selectedResult == liProposition.length-1){
                liProposition[selectedResult].className = '';
                selectedResult = -1;
                lieuRecherche.value = ancienneLettreTappe;
            }
            else if (selectedResult == -1){
                selectedResult = selectedResult +1;
                liProposition[selectedResult].className = selectedClass;
                lieuRecherche.value = liProposition[selectedResult].innerHTML;
            }
            else{
                liProposition[selectedResult].className = '';
                selectedResult = selectedResult +1;
                liProposition[selectedResult].className = selectedClass;
                lieuRecherche.value = liProposition[selectedResult].innerHTML;
            }
        }

        else if(e.keyCode == 13){ // pour la touche entree
            if(selectedResult != -1) choiceResult(liProposition[selectedResult]);
            else ; lancerRecherche();
        }

        else if(ancienneLettreTappe != this.value){
            ancienneLettreTappe = this.value;
            if (previousRequest && previousRequest.readyState < 4) {
                previousRequest.abort(); // Si on a toujours une requête en cours, on l'arrête
            }
            previousRequest = getResults(this.value);
            selectedResult = -1;
        }
    });
};
