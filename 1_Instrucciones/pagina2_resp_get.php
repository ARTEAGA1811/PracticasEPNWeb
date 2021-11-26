<html>
    <body>
        <h1> Parametros enviados por el cliente </h1>
        <?php
            print_r($_GET);
            echo "<br>";
        ?>
        Nombre <?php echo $_GET['nombre']; ?>
        Correo <?php echo $_GET['email']; ?>
        <h3>Gracias por su pago!!</h3>
        <p>Su pago con la tarjeta <?php echo $_GET["numtarjeta"]; ?> ha sido procesado con exito </p>
    </body>
</html>