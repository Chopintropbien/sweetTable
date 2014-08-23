

    // pour que les photo selectionne s'afiche à l'ecran
function affiche_img_select(id_input, id_img_tag){
    var handleFileSelect = function(evt) {
        var files = evt.target.files;
        var file = files[0];
        if (files && file) {
            var reader = new FileReader();

            reader.onload = function(readerEvt) {
                var binaryString = readerEvt.target.result;
                document.getElementById(id_img_tag).src = 'data:image/png;base64,' + btoa(binaryString);
            };
            reader.readAsBinaryString(file);
        }
    };

    if (window.File && window.FileReader && window.FileList && window.Blob) {
        document.getElementById(id_input).addEventListener('change', handleFileSelect, false);
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }
}