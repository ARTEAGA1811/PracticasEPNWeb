<!--Para usar las sesiones primero debemos iniciar -->
<?php
session_start();
//Si no existe la sesion, se redirige a la pagina de inicio
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
    <title>Otra Pagina</title>
</head>
<body>
    <h1>Pagina interna de la intranet</h1>
    <h3>Usuario logueado: <?php echo $_SESSION["nombre"] ?></h3>
    <p><a href="miPanel.php">Regresar a mi panel</a></p>
    <p><a href="cerrarSesion.php">Cerrar Sesion</a></p>

</body>
</html>