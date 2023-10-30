<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones y Cookies ejercicio 3</title>
    <style>
        form{
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 30%;
            grid-gap: 1em;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <form method="post" action="ejercicio03.php">
        <label>Idioma</label>
        <p>
        <?php
            if ($ultimoIdioma) {
                echo $ultimoIdioma;
            } else {
                echo "No hay idioma almacenado.";
            }
        ?>
        </p>
        <label for="idioma">Elige tu Idioma</label>
        <div>
            <select id="idioma" name="idioma">
                <option>Euskera</option>
                <option>Castellano</option>
            </select>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>