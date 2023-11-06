<?php
// Realiza la conexión a la base de datos
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "practica4";

$mensaje = "";

function connect($host, $dbname, $user, $pass){
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

$dbh = connect($host, $dbname, $user, $pass);

if(isset($_GET['id'])) {
    $dni = $_GET['id'];
    // Realizar la consulta para obtener los detalles del empleado con el ID $dni
    $query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados WHERE dni = :dni";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
    $stmt->execute();
    $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

    // Mostrar los detalles del empleado en una tabla
    if(!empty($empleado)) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalles del Empleado</title>
            <style>
                table {
                    border-collapse: collapse;
                }

                th, td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }
            </style>
        </head>
        <body>
            <h1>Detalles del Empleado</h1>

            <table>
                <tr>
                    <th>DNI</th>
                    <td><?php echo $empleado['dni']; ?></td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td><?php echo $empleado['nombre']; ?></td>
                </tr>
                <tr>
                    <th>Apellidos</th>
                    <td><?php echo $empleado['apellidos']; ?></td>
                </tr>
                <tr>
                    <th>Edad</th>
                    <td><?php echo $empleado['edad']; ?></td>
                </tr>
                <tr>
                    <th>Sexo</th>
                    <td><?php echo $empleado['sexo']; ?></td>
                </tr>
                <tr>
                    <th>Fecha de Nacimiento</th>
                    <td><?php echo $empleado['fecha_de_nacimiento']; ?></td>
                </tr>
                <tr>
                    <th>Curriculum</th>
                    <td><?php echo $empleado['curriculum']; ?></td>
                </tr>
            </table>
            <a href="ejercicio3.php">Volver</a>
        </body>
        </html>
<?php
    } else {
        echo "Empleado no encontrado.";
    }
} else {
    echo "ID de empleado no válido.";
}
?>
