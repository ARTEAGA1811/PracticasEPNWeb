<html>
    <body>
        <h1> Parametros enviados por el cliente </h1>
        <?php
            print_r($_POST);
            echo "<br>";
        ?>
        Nombre <?php echo $_POST['nombre']; ?>
        Correo <?php echo $_POST['email']; ?>
        <h3>Gracias por su pago!!</h3>
        <p>Su pago con la tarjeta <?php echo $_POST["numtarjeta"]; ?> ha sido procesado con exito </p>
    </body>
</html>