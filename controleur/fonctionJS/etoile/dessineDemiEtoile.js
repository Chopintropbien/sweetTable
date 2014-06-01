

// le canvas dois etre carre
function dessineDemiEtoile(canvas, tailleCanvas){
    var context = canvas.getContext('2d');

// creer le contour de l'étoile
    context.strokeStyle = "black";
    context.lineWidth = 1;
    context.fillStyle = "white";
    context.beginPath();
    context.moveTo(0.5 * tailleCanvas, 0);
    context.lineTo(0.391 * tailleCanvas, 0.3478 * tailleCanvas);
    context.lineTo(0.0217 * tailleCanvas, 0.3478 * tailleCanvas);
    context.lineTo(0.326 * tailleCanvas, 0.5522 * tailleCanvas);
    context.lineTo(0.1957 * tailleCanvas, 0.9 * tailleCanvas);
    context.lineTo(0.5 * tailleCanvas, 0.6826 * tailleCanvas);
    context.lineTo(0.8043 * tailleCanvas, 0.9 * tailleCanvas);
    context.lineTo(0.6739 * tailleCanvas, 0.5522 * tailleCanvas);
    context.lineTo(0.9783 * tailleCanvas, 0.3478 * tailleCanvas);
    context.lineTo(0.6087 * tailleCanvas, 0.3478 * tailleCanvas);
    context.closePath();
    context.stroke();
    context.fill();


// moitier gauche de l'étoite qui va être colorier
    context.strokeStyle = "transparent";
    context.fillStyle = canvas.style.color;
    context.beginPath();
    context.moveTo(0.5 * tailleCanvas, 0);
    context.lineTo(0.391 * tailleCanvas, 0.3478 * tailleCanvas);
    context.lineTo(0.0217 * tailleCanvas, 0.3478 * tailleCanvas);
    context.lineTo(0.326 * tailleCanvas, 0.5522 * tailleCanvas);
    context.lineTo(0.1957 * tailleCanvas, 0.9 * tailleCanvas);
    context.lineTo(0.5 * tailleCanvas, 0.6826 * tailleCanvas);
    context.closePath();
    context.stroke();
    context.fill();

}
