<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Validaciones de Datos</h1>
    <form action="lectura.php" method="post">
        <p>
        <label for="numero">Indica un numero (max 10 numeros)</label>
        <input type="number" name="numero" id="numero" min="1" max="9999999999" required>
        </p>

        <p>
            <label for="texto">Indica tu nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>

        <p>
            <input type="submit" value="Enviar">
        </p>

    </form>
    <?php
        if(!empty($_GET['mensaje'])){
            echo $_GET['mensaje'];
        }
    ?>

</body>
</html>
<?php
