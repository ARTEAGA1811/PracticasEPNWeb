<?php
$nombre = "";
$clave = "";
$sexo = "";
$preferencias = false;

if(count($_COOKIE)>0){
    if(isset($_COOKIE["c_preferencias"])){
        $nombre = isset($_COOKIE["c_nombre"])? $_COOKIE["c_nombre"] : "";   
        $clave = isset($_COOKIE["c_clave"]) ? $_COOKIE["c_clave"] : "";
        $sexo = isset($_COOKIE["c_sexo"]) ? $_COOKIE["c_sexo"] : "";
        $preferencias = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <h1>Login Ejemplo</h1>
    <form method="POST" action="pagina2.php">
        <fieldset>
            Usuario: <br>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br>
            Clave: <br>
            <input type="password" name="clave" value="<?php echo $clave; ?>">
            <p>Sexo:
                <?php if($sexo==""){?>
                    <input type="radio" name="hm" value="h" >Hombre
                    <input type="radio" name="hm" value="m">Mujer
                <?php }else{
                    if($sexo=="h"){?>
                        <input type="radio" name="hm" value="h"  checked>Hombre
                        <input type="radio" name="hm" value="m" >Mujer
                    <?php }else if($sexo == "m"){?>
                        <input type="radio" name="hm" value="h">Hombre
                        <input type="radio" name="hm" value="m" checked>Mujer
                    <?php }
                }?>
            </p>
            <br>
            <input type="checkbox" name="chkpreferencias" <?php if($preferencias){echo "checked";}?>> Recordar mis datos
            <br>
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>