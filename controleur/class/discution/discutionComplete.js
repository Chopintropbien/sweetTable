

(function (){
    var textarea = document.getElementById('textarea');

    var buttonRepondre = document.getElementById('repondre');


    var idListe = 'discution';
    var liste = document.getElementById(idListe);
    // nombre de li de la liste
    var nombreLiListe = 0;
    while(document.getElementById(nombreLiListe + idListe)) { ++nombreLiListe;}


    addEvent(buttonRepondre, 'click', function(){

        if(/[^ \n\t]/.test(textarea.value)){
            var photoAuteur = 'http://localhost/Meittopi/image/profil_vide.png',
                speudoAuteur = 'Andrei',
                lienAuteur = 'dd';//TODO:
            var dateDePublication = '2/02/2014';

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'http://localhost/meittopi/modele/discution/reponseAUneDiscution.php');
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
                if (xhr.readyState == 4) { // TODO: ajouter  && xhr.status == 200

                    // inserer une nouvelle li
                    var nouvelleLi = liste.insertBefore(document.createElement('li'), liste.lastElementChild);
                    nouvelleLi.id = nombreLiListe + idListe;
                    nouvelleLi.className = 'reponse';

                    // inserer une nouvelle hr
                    liste.insertBefore(document.createElement('hr'), liste.lastElementChild);

                    // ajouter la reponse a la liste

                    // partie a gauche pour la photo de l'auteur et son speudo
                    var div = nouvelleLi.appendChild(document.createElement('div'));
                    var img = div.appendChild(document.createElement('img')).src = photoAuteur;
                    var aLienAuteur = document.createElement('a');
                    aLienAuteur.href = lienAuteur;
                    div.appendChild(aLienAuteur);
                    aLienAuteur.appendChild(document.createElement('p')).innerHTML = speudoAuteur;

                    // partie a droite

                    var article = nouvelleLi.appendChild(document.createElement('article'));
                    article.appendChild(document.createElement('p')).innerHTML = xhr.responseText;
                    article.appendChild(document.createElement('time')).innerHTML = dateDePublication;

                    var section = article.appendChild(document.createElement('section')); // avis sur la discution
                    section.appendChild(document.createElement('a')).innerHTML = 'Envoyer un compliment';
                    section.appendChild(document.createElement('a')).innerHTML = 'Envoyer un message';
                    var aContenueInap = document.createElement('a');
                    aContenueInap.innerHTML = 'Signaler un contenue inapproprié';
                    aContenueInap.className = 'contenueIndesirable';
                    section.appendChild(aContenueInap);


                    // faire disparaitre le gif d'attente
                    document.getElementById('gifDAttente').style.display = 'none';

                }

                if (xhr.readyState == 3) { // TODO: ajouter si le faut un truc commme && xhr.status == 200
                    document.getElementById('gifDAttente').style.display = 'block';
                }
            };
            xhr.send('reponse=' + textarea.value);
            textarea.value = '';
        }





    });








})();

