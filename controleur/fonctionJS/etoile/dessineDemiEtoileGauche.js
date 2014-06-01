



// le canvas doit etre un rectangle de longeur l et des largeur 2*l. La largeur doit etre dans horizontal

function dessineDemiEtoileGauche(canvas, longeur, couleur){
    var context = canvas.getContext('2d');

// creer le contour de l'étoile
    context.strokeStyle = "black";
    context.lineWidth = 1;
    context.fillStyle = "white";
    context.beginPath();
    context.moveTo(0.5 * longeur, 0);
    context.lineTo(0.391 * longeur, 0.3478 * longeur);
    context.lineTo(0.0217 * longeur, 0.3478 * longeur);
    context.lineTo(0.326 * longeur, 0.5522 * longeur);
    context.lineTo(0.1957 * longeur, 0.9 * longeur);
    context.lineTo(0.5 * longeur, 0.6826 * longeur);
    context.closePath();
    context.stroke();
    context.fill();


// moitier gauche de l'étoite qui va être colorier
    context.strokeStyle = "transparent";
    context.fillStyle = couleur;
    context.beginPath();
    context.moveTo(0.5 * longeur, 0);
    context.lineTo(0.391 * longeur, 0.3478 * longeur);
    context.lineTo(0.0217 * longeur, 0.3478 * longeur);
    context.lineTo(0.326 * longeur, 0.5522 * longeur);
    context.lineTo(0.1957 * longeur, 0.9 * longeur);
    context.lineTo(0.5 * longeur, 0.6826 * longeur);
    context.closePath();
    context.stroke();
    context.fill();

}