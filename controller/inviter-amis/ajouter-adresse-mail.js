
function ajouterAdresseEmail(){

    var ajouterEmail = document.getElementById('ajouterEmail');
    addEvent(ajouterEmail, 'click', function(){
        var contenantEmail = document.getElementById('contenantEmail');

        createNouvelleInputEmail(numMail() +1, contenantEmail);
        createNouvelleInputEmail(numMail() +1, contenantEmail);
        createNouvelleInputEmail(numMail() +1, contenantEmail);
    });

}

function numMail(){
    var contenantEmail = document.getElementById('contenantEmail');
    var elem = contenantEmail.childElementCount;

    return elem;

}

function createNouvelleInputEmail(numEmail, contenantEmail){
    var nouvelleAdresseEmail = document.createElement('input');
    nouvelleAdresseEmail.type = 'texte';
    nouvelleAdresseEmail.placeholder = 'Adresse e-mail n°' +numEmail;
    nouvelleAdresseEmail.id = numEmail + 'adressEmail';
    nouvelleAdresseEmail.name = numEmail + 'adressEmail';
    contenantEmail.appendChild(nouvelleAdresseEmail);

}