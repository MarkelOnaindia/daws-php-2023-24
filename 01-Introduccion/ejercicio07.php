<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio07</title>
</head>
<body>
    <?php echo
        "<h1>Introduccion</h1>
         <h3>Ejercicio7</h3>";

         $a =  $_GET["a"];
         $b =  $_GET["b"];

         function multiplicar($a,$b){
            return $a * $b;
         }

         echo multiplicar($a,$b);
    ?>


</body>
</html>