<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio08</title>
</head>
<body>
    <?php echo
        "<h1>Introduccion</h1>
         <h3>Ejercicio8</h3>";

         $a =  $_GET["a"];
         $b =  $_GET["b"];
        
         function esMayor($a,$b){
            if($a>$b){
                return true;
            }
            return false;
         }

         $resultado = esMayor($a, $b);
         echo "¿$a es mayor que $b? " . ($resultado ? "Sí" : "No");
    ?>
    
</body>
</html>