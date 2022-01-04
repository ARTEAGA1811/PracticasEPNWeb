function mostrarMensaje(){
    console.log('Se hizo click!!');
}


function mostrarMensajeDelElementoHTML(elementoHTML){

}
function inicializar(){
    //console.log('Me ejecuto cuando el DOM está listo, despues de cargar todo el DOM');
    //Pro propiedad (Forma 2)
    var elemento = document.getElementsByTagName('p')[1];
    elemento.onclick = mostrarMensaje;


    //Registrando con addEventListener (Forma 3)
    var elementoForma3 = document.getElementsByTagName('p')[2];
    elementoForma3.addEventListener('click', mostrarMensaje);


    //Caso de Uso: Se requiere el contenido del elemento seleccionado.
    //Con fuciones anonimas y el uso de THIS
    document.getElementsByTagName('p')[1].onclick = mostrarMensajeDelElementoHTML(document.getElementsByTagName('p')[1]);
    document.getElementsByTagName('p')[2].addEventListener('click', mostrarMensajeDelElementoHTML(document.getElementsByTagName('p')[2]));

    document.getElementsByTagName('p')[1].onclick = function(){
        mostrarMensajeDelElementoHTML(this);
    }

    
}

window.onload = inicializar;