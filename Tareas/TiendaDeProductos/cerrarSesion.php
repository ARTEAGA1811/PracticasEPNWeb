<?php
//Se cierra la sesion
$pathSesiones = $_SERVER["DOCUMENT_ROOT"]."/temporal";
ini_set("session.save_path", $pathSesiones);
session_start();

if($_SESSION["preferencias"] == false){
    $_SESSION = array();
    session_destroy();
    setcookie("c_idioma", "");
}

header("Location: index.php")
    
?>