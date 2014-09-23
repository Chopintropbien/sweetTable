(function (d){

    // put in a string all the checkbox that the user checked (separated mi a ,)
    function get_in_a_string(class_option, id_input_hidden){
        var options = d.getElementsByClassName(class_option);

        var string = '';
        for(i = 0; options.length > i; ++i){
            if(options[i].checked) {
                var coma = (string == '') ? '' : ',';
                string += ',' +  options[i].id;
            }
        }

        d.getElementById(id_input_hidden).value = string;
    }

    function calculate_min_max_price(){

        var prix_coche = [];
        var prix = d.getElementsByClassName('sous');

        for(i = 0; prix.length > i; ++i){
            if(prix[i].checked) prix_coche.push(prix[i].id[0]);
        }

        // mettre dans les input hiden
        var max = d.getElementById('maxPrice_HI');
        var min = d.getElementById('minPrice_HI');

        if(prix_coche.length == 0) {
            max.value = 0;
            min.value = 5;
        }
        else{
            max.value = prix_coche[0];
            min.value = prix_coche[prix_coche.length - 1];
        }
    }

    // change le type pour qu'il ne soumet plus automatiquement
    var submit_nav = d.getElementById('submit_nav');
    submit_nav.type = 'button';

    // met toutes les donnee necessaire dans les input hidden dans le nav
    submit_nav.onclick = function(){
        get_in_a_string('cuisine', 'cuisine_HI');
        get_in_a_string('fonction', 'tags_HI');
        calculate_min_max_price();
        d.getElementById('recherche_restau_form').submit();
    }
})(document);