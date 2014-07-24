(function(){

    document.getElementById('prevSpan').onclick = function() {
        var i = parseFloat(this.className);
        if(i != 0){
            document.getElementById(i + 'slide').style.display = 'none';
            document.getElementById(i-1 + 'slide').style.display = 'inline-block';
            this.className = i -1;
        }
    };
    document.getElementById('suivSpan').onclick = function() {
        var prevSpan = document.getElementById('prevSpan');
        var i = parseFloat(prevSpan.className);
        if(i != 5){
            document.getElementById(i + 'slide').style.display = 'none';
            document.getElementById((i+1) + 'slide').style.display = 'inline-block';
            prevSpan.className = i + 1;
        }
    };






})();