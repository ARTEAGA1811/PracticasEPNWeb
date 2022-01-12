var inicial = document.getElementById("inicial"); 
var miImagen = document.querySelector("img");

var numActual = 1;
var imgList = ["recursos/Diapositiva1.png", "recursos/Diapositiva2.png", "recursos/Diapositiva3.png"];

function accionBtnNext(){
    if(numActual < 3){
        //cambiar el numero de la diapositiva
        numActual++;
        inicial.textContent = numActual;

        //cambiar la imagen presentada
        miImagen.src = imgList[numActual-1];
    }
}

function accionBtnBack(){
    if(numActual > 1){
        //cambiar el numero de la diapositiva
        numActual--;
        inicial.textContent = numActual;

        //cambiar la imagen presentada
        miImagen.src = imgList[numActual-1];
    }
}

