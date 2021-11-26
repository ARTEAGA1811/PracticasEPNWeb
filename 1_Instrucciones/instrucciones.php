<?php
//CODIGO PHP
#este es  un comentario
#impresion en pantalla
print "Esta es una prueba con print";
echo "<br>";
echo "esta es una prueba con echo";

#=======variables========
$pais = "Ecuador";
$numero = "2020";
$bandera1 = true;
$bandera2 = false;


#uso de echo para imprimir en pantalla las variables.
echo "<br><br>";
echo "$pais es rico y diverso. El $pais del $numero";
echo "<br>";
echo $pais . "es rico y diverso. El ". $pais . " del " . $numero;

#Arrays
$estadoCivil = array("Soltero", "Casado", "Divorciado");
#para imprimir un array
print_r($estadoCivil);
echo "<br>";
var_dump($estadoCivil);


#con clave y valor
$estadoCivil = array("val1"=>"soltero", "val2"=>"casado", "val3"=>"divorciado");
echo "<br>";
echo "Estado civil (clave, valor):".$estadoCivil["val1"];

?>