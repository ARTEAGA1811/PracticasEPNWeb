<?php
//Obtengo el parametro borrar con el GET
$borrarCookies = $_GET['borrar'];
//isset verifica que $_COOKIE este bien configurado.
if($borrarCookies == 1 && isset($_COOKIE)){
    setcookie("c_nombre","");
    setcookie("c_clave","");
    setcookie("c_sexo","");
    setcookie("c_preferencias","");
}

header("Location: index.php")
    
?>