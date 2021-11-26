<?php
//Como vamos a destruir las sesiones primero debemos iniciar el soporte
//de sesiones
session_start();
session_destroy();

//El header inyecta una cabecera HTTP que redirige a la pagina
header("Location: index.php");
?>