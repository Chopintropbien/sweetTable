(function (){

    // ajouter une autre trnache d'horraire
    document.getElementById('plus_autre_tranche_horraire').onclick = function (){
        this.style.display = 'none';
        document.getElementById('autre_tranche_horraire').style.display = 'inline-block';
    };

    // ajouter une exeption
    document.getElementById('ajouter_exeption').onclick = function (){

        var h_ouverture_1 = document.getElementById('h_ouverture_1');
        var h_fermeture_1 = document.getElementById('h_fermeture_1');

        var h_ouverture_2 = document.getElementById('h_ouverture_2');
        var h_fermeture_2 = document.getElementById('h_fermeture_2');

        var autre_tranche_horraire = document.getElementById('autre_tranche_horraire');

        // si l'utilisateur n'a pas remplis les horraire généraux
        if(h_ouverture_1.value == 'null'){
            h_ouverture_1.style.border = '1px red solid';
            h_fermeture_1.style.border = 'none';
        }
        else if(h_fermeture_1.value == 'null'){
            h_fermeture_1.style.border = '1px red solid';
            h_ouverture_1.style.border = 'none';
        }
        // si l'utilisateur à mal remmlis l'autre trnache horraire
        else if((h_ouverture_2.value == 'null' && h_fermeture_2.value != 'null') ||
            (h_ouverture_2.value != 'null' && h_fermeture_2.value == 'null')){

            h_fermeture_1.style.border = 'none';
            h_ouverture_1.style.border = 'none';

            if(h_ouverture_2.value == 'null'){
                h_ouverture_2.style.border = '1px red solid';
                h_fermeture_12.style.border = 'none';
            }
            else if(h_fermeture_2.value == 'null'){
                h_fermeture_2.style.border = '1px red solid';
                h_ouverture_2.style.border = 'none';
            }
        }
        // si l'utilisateur a tout bien remplis
        else{
            this.style.display = 'none';
            document.getElementById('horraire_general').style.display = 'none';
            document.getElementById('exeption').style.display = 'block';


            /* ajouter les horraire normal de fonctionnement au tbleau des horraire */

            for(var i = 0; i < 7; ++i){

                var horraire = document.getElementById(i + 'ouvert');

                var select = '<select style="display: none;" class="' + i + 'horraire">';
                for(var j = 0; j < 23; j++){
                    select += '<option value="'+ j +'">'+ j +'</option>';
                }
                select += '</select>';



                var class_span = horraire.id[0] + 'span';

                var contenue = '<span class="'+ class_span +'">' + h_ouverture_1.value + '</span>';
                contenue += select;
                contenue += ' h - ';

                contenue += '<span class="'+ class_span +'">' + h_fermeture_1.value + '</span>';
                contenue += select;
                contenue += ' h ';

                if(h_ouverture_2.value != 'null'){
                    contenue += '  et  ' + ' <span class="'+ class_span +'"> ' + h_ouverture_2.value + '</span>';
                    contenue += select;
                    contenue += ' h - ';

                    contenue += '<span class="' + class_span + '">' + h_fermeture_2.value + '</span>';
                    contenue += select;
                    contenue += ' h';
                }

                horraire.innerHTML = contenue;
            }
        }

    };


})();