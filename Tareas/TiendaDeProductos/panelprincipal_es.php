<?php

//Se define la cookie
setcookie("c_idioma", "es", time()+60*60);

//Se crea la sesion
$pathSesiones = $_SERVER["DOCUMENT_ROOT"]."/temporal";
ini_set("session.save_path", $pathSesiones);

session_start();
//El isset sirve para validar que el parametro que se pasa no sea nulo.
if(!isset($_SESSION["usuario"]) && !isset($_SESSION["clave"])){
    if ($_POST["usuario"]!= "" && $_POST["clave"]!= ""){
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["clave"] = $_POST["clave"];
    }else{
        header("Location:index.php");
    }
}
if(isset($_POST["chkpreferencias"])){
    $_SESSION["preferencias"] = true;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Principal</title>
</head>
<body>
    <h1>Panel Principal</h1>  
    <h3>Bienvenido Usuario: <?php echo $_SESSION["usuario"] ?></h3>
    <ul>
        <li><a href="#">ES(Español)</a></li>
        <li><a href="panelprincipal_en.php" >EN(English)</a></li>
    </ul> 
    <br>
    <a href="CerrarSesion.php">Cerrar Sesion</a>
    <br>
    <h2>Lista de Productos</h2>
    <?php
    $pathArchivo = "categorias_es.txt";   
    $fp = fopen($pathArchivo, "r");
    while(!feof($fp)){
        $linea = fgets($fp);
        echo $linea."<br>";
    }
    ?>
</body>
</html>