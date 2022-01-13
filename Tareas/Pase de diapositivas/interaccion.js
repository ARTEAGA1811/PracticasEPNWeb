var inicial = document.getElementById("inicial"); 
var miImagen = document.querySelector("img");
var menuIzq = document.querySelector(".menu_izq");
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


function menuHamburguesa(){
    if(menuIzq.classList.contains("activo")){
        menuIzq.classList.remove("activo");
    }else{
        menuIzq.classList.add("activo");
    }
}

function irADiapositiva(num){
    numActual = num;
    inicial.textContent = num;
    miImagen.src = imgList[num-1];
}
