<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio05</title>
</head>
<body>
    <?php echo
        "<h1>Introduccion</h1>
         <h3>Ejercicio5</h3>";

         $a =  $_GET["a"];
         $b =  $_GET["b"];

         function suma($a,$b){
            return $a + $b;
         }
         function division($a,$b){
            return $a / $b;
         }
         function amayor($a,$b){
            if($a>$b){
                return "$a es mayor que $b";
            }
            return "$a es menor o igual a $b";
         }


         echo suma($a,$b);
         echo "\n";
         echo division($a,$b);
         echo "\n";
         echo amayor($a,$b);

    ?>

    
</body>
</html>