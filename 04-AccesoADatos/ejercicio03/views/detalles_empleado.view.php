    <?php require "../bd.php" ?>
    <?php require "partials/header.php";
    $empleado = obtenerEmpleadoPorDNI($dbh,$_GET["id"]);
    ?>

    <?php $dbh = connect($host, $dbname, $user, $pass);?>

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
            <a href="../ejercicio3.php">Volver</a>
    
    <?php require "partials/header.php" ?>