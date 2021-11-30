<?php

//setear el directorio donde se guarda el fichero de sesion
$pathSesiones = $_SERVER["DOCUMENT_ROOT"]. "/temporal";
ini_set("session.save_path", $pathSesiones);

session_start();

if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    if ($_POST["nombre"]!= "" && $_POST["clave"]!= ""){
        $_SESSION["nombre"] = $_POST["nombre"];
        $_SESSION["clave"] = $_POST["clave"];
    }else{
        header("Location:index.php");
    }
}


?>

<html>
    <head>

    </head>
    <body>
        <h1>Panel Principal de mi Intranet </h1>
        <h3>Usuario logeado: <?php echo $_SESSION["nombre"]; ?></h3>
        <p><a href="otraPagina.php">Ir a otra página dentro de la intranet</a></p>
        <hr>
        <p><a href="cerrarSesion.php">Cerrar Sesión</a></p>
    </body>
</html>