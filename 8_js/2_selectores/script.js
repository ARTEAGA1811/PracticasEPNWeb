//Obtener elemento por id
//Se puede usar var y let
// var se utiliza para declarar variables globales
// let se utiliza para declarar variables locales

console.log("wenass")
var elemento = window.document.getElementById('mielemento');
console.log("El elemento es: "+ elemento.textContent);

//Obtener elemento por la etiqueta (Tag name)
var elementos = document.getElementsByTagName('p'); 
console.log("Elements by tag name (p): "+ elementos.length);
for(var i=0; i<elementos.length; i++){
    console.log("Elemento: "+ i + " es: "+ elementos[i].textContent);
}

console.log("************************************************")

//Obtener elemento por clase
var elementosPorClase = document.getElementsByClassName('clase');
console.log("Elements by class name (clase): "+ elementosPorClase.length);
for(var i=0; i<elementosPorClase.length; i++){
    console.log("Elemento: "+ i + " es: "+ elementosPorClase[i].textContent);
}

console.log("************************************************")


//Obtner elementos con QUERY SELECTOR
var elementoQueryP = document.querySelector('#principal p');
console.log("Elemento query selector (principal p): "+ elementoQueryP.textContent);
console.log("************************************************")

//Obtener elementos con QUERY SELECTOR ALL
var elementosQueryP = document.querySelectorAll('#principal p');
console.log("Elementos query selector all (principal p): "+ elementosQueryP.length);
for(var i=0; i<elementosQueryP.length; i++){
    console.log("Elemento: "+ i + " es: "+ elementosQueryP[i].textContent);
}
console.log("************************************************")