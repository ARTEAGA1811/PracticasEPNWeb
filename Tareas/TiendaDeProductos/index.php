<?php
    //Se verifican las cookies
    $idioma = isset($_COOKIE["c_idioma"]) ? $_COOKIE["c_idioma"] : "es";
    setcookie("c_idioma", $idioma, time()+60*60*24);

    //Se verifica la sesion
    $usuario = "";
    $clave = "";
    $preferencias = false;
    
    
    $pathSesiones = $_SERVER["DOCUMENT_ROOT"]."/temporal";
    ini_set("session.save_path", $pathSesiones);
    session_start();
    $usuario = isset($_SESSION["usuario"])? $_SESSION["usuario"] : "";
    $clave = isset($_SESSION["clave"]) ? $_SESSION["clave"] : "";
    $preferencias = isset($_SESSION["preferencias"]) ? $_SESSION["preferencias"] : false;
    $_SESSION["preferencias"] = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <?php 
    $sigPag = "";
    if($idioma=="es"){
        $sigPag = "panelprincipal_es.php";
    }else{
        $sigPag = "panelprincipal_en.php";
    }
    ?>
    <form method="POST" action="<?php echo $sigPag ?>">
        <fieldset>
            <legend>Información</legend>
            Usuario: <br>
            <input type="text" name="usuario" value="<?php echo $usuario; ?>"><br>
            Clave: <br>
            <input type="password" name="clave" value="<?php echo $clave; ?>"><br> <br>
            <input type="checkbox" name="chkpreferencias" <?php if($preferencias){echo "checked";}?>> Recordarme <br> <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

</body>
</html>