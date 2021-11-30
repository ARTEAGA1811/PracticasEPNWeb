<?php
session_start();
if(!isset($_SESSION["nombre"]) && !isset($_SESSION["clave"])){
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página interna a la Intranet</h1>
    <h3>Usuario logeado: <?php echo $_SESSION["nombre"] ?></h3>
    <p><a href="miPanel.php">Regresar a Mi Panel</a></p>
    <p><a href="cerrarSesion.php">Cerrar Sesion</a></p>

</body>
</html>