<?php
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $sexo = $_POST['hm'];
    $preferencias = $_POST['chkpreferencias'];

    //print_r($_POST);
    #die(); #llega hasta aqui

    #crear las cookies
    #con el isset se verifica si existe la variable, con el ? y el : se pregunta si es true o false respectivamente
    #si es true se crea la cookie, si es false no se crea la cookie
    setcookie("c_nombre", isset($_POST["nombre"])? $_POST["nombre"] : "");
    setcookie("c_clave", isset($_POST["clave"]) ? $_POST["clave"] : "", time()+60*60);
    setcookie("c_sexo", isset($_POST["hm"]) ? $_POST["hm"] : "", time()+60*60);
    setcookie("c_preferencias", isset($_POST["chkpreferencias"]) ? $_POST["chkpreferencias"] : false)
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h2>Bienvenido <?php echo $_POST["nombre"] ?></h2>
    <p> <?php echo count($_COOKIE)?> preferencias guardadas en la cookie: <?php print_r($_COOKIE)?></p>
    <hr>
    <!--Se pasan parametros en la URL del borrar cookies-->
    <a href="borrarCookie.php?borrar=1">Borrar cookies y regresar al LOGIN</a>
    <br>
    <a href="borrarCookie.php?borrar=0">Regresar a LOGIN</a>

    <a href="/2_cookies/borrarCookie.php">Borrar Cookies</a>
</body>
</html>