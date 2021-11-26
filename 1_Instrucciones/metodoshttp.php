<html>
    <head>
        <meta charset="UTF-8">
        <title>Metodos HTTP</title>
    </head>
    <body>
        <h1>PETICION CON GET</h1>
        <form method="GET" action="pagina2_resp_get.php">
            <fieldset>
                <legend>Informacion para pago virtual</legend>
                Nombre: <input type="text" name="nombre"><br>
                Email: <input type="text" name="email"><br>
                Numero T. Creditos: <input type="text" name="numtarjeta"><br>
                CVV: <input type="text" name="cvv"><br>
                <input type="submit" value="Realizar Pago">
            </fieldset>
        </form>

        <h1>PETICION CON POST</h1>
        <form method="POST" action="pagina2_resp_post.php">
            <fieldset>
                <legend>Informacion para pago virtual</legend>
                Nombre: <input type="text" name="nombre"><br>
                Email: <input type="text" name="email"><br>
                Numero T. Creditos: <input type="text" name="numtarjeta"><br>
                CVV: <input type="text" name="cvv"><br>
                <input type="submit" value="Realizar Pago">
            </fieldset>
        </form>
    </body>
</html>