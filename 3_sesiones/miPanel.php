<?php

//setear el directorio donde se guarda el fichero de sesion.
//Con el document_root se obtiene la ruta completa del fichero de sesion.
//con el /temporal se indica que se guardara en la carpeta temporal del servidor.
//La carpeta temporal se creo en la carpeta htdocs
//Las sesiones se guardan en esa carpeta.
$pathSesiones = $_SERVER["DOCUMENT_ROOT"]. "/temporal";
ini_set("session.save_path", $pathSesiones);

session_start(); //Con esto habilitamos las sesiones, siempre debe
//estar al inicio.


//El isset sirve para validar que el parametro que se pasa no sea nulo.
if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    if ($_POST["nombre"]!= "" && $_POST["clave"]!= ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
    }else{
        header("Location:index.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi panel</title>
</head>
<body>
    <h1>Panel Principal de mi Intranet</h1>
    <h3>Usuario logueado: <?php echo $_SESSION["nombre"]; ?></h3>
    <p><a href="otraPagina.php">Ir a otra página dentro de la intranet</a></p>
    <hr>
    <p><a href="cerrarSesion.php">Cerrar Sesión</a></p>
</body>
</html>