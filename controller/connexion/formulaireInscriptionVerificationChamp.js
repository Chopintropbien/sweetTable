
( function() {
    var element = document.getElementById('creerUnCompte');
    element.onclick = function() {
        var check = {};

        check['nomjava'] = function(id){
            var nom = document.getElementById(id);

            var valeur;
            if(id == 'nomjava'){
                valeur = 'nom';
            }
            if(id == 'prenomjava'){
                valeur= 'prénom';
            }

            if(nom.value.length <1){
                nom.value = '';
                nom.placeholder = 'Saisissez votre ' + valeur;
                nom.className = 'petitChampErreur';
                return false;
            }
            else if(! /^[a-zA-Zéèçàïêë ]+$/.test(nom.value) || ! /[^ \n\t]/.test(nom.value)){
                nom.value = '';
                nom.placeholder = 'Veillez saisir un ' + valeur;
                nom.className = 'petitChampErreur';
                return false;
            }
            else{
                nom.className = 'petitChamp';
                return true;
            }
        }
        check['prenomjava'] = check['nomjava'];

        check['email'] = function(){

            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

            var email = document.getElementById('email');
            var confirmemail = document.getElementById('confirmemail');
            if(email.value.length <1){
                email.value = "";
                confirmemail.value = "";
                email.placeholder = 'Saisissez votre adresse e-mail';
                email.className = 'grandChampErreur';
                confirmemail.className = 'grandChampErreur';
                return false;
            }
            else if(! re.test(email.value)){
                email.value = "";
                confirmemail.value = "";
                email.placeholder = 'Veillez saisir une adresse e-mail';
                email.className = 'grandChampErreur';
            }
            else {
                email.className = 'grandChamp';
            }

            // deux email identique
            if (email.value != confirmemail.value){
                confirmemail.value = "";
                confirmemail.placeholder = 'Saisissez deux e-mail identique';
                confirmemail.className = 'grandChampErreur';
                return false;
            }
            else{
                //email.className = 'grandChamp';
                confirmemail.className = 'grandChamp';
                return true;
            }
        }

        check['motdepasse'] = function() {
            var motdepasse = document.getElementById('motdepasse');
            if(motdepasse.value.length == 0){
                motdepasse.placeholder = 'Saisissez votre de passe';
                motdepasse.className = 'grandChampErreur';
                return false;
            }
            else if (motdepasse.value.length <10){
                motdepasse.value = '';
                motdepasse.placeholder = '10 caratère au minimum'
                motdepasse.className = 'grandChampErreur';
                return false;
            }
            else{
                motdepasse.className = 'grandChamp';
                return true;
            }
        }

        check['ville'] = function(){
            var motdepasse = document.getElementById('ville');
            if(motdepasse.value.length == 0){
                motdepasse.placeholder = 'Saisissez votre ville';
                motdepasse.className = 'grandChampErreur';
                return false;
            }
            else{
                motdepasse.className = 'grandChamp';
                return true;
            }
        }

        check['pays'] = function() {
            var list = document.getElementById('pays');
            if(list.options[list.selectedIndex].value == 'null'){
                list.className = 'dateErreur';
                return false;
            }
            else{
                list.className = 'date';
                return true;
            }
        }


        var formulaire = document.getElementById('inscription');
        var result = true;
        for (var i in check){
            result = check[i](i) && result;
        }


        // si le formulaire ets bien remplis, alors faire l'envois des donne dans le fichier
        if(result){
            formulaire.submit();
        }
    }
}
    ) ();