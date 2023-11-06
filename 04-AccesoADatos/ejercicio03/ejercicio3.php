<?php require "bd.php" ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST["dni"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $fecha = $_POST["fecha"];
    $curriculum = $_POST["curriculum"];

    if (!empty($dni) && !empty($nombre) && !empty($apellidos) && !empty($edad) && !empty($sexo) && !empty($fecha) && !empty($curriculum)) {
        if (agregarEmpleado($dbh, $dni, $nombre, $apellidos, $edad, $sexo, $fecha, $curriculum)) {
            $mensaje = "Empleado agregado correctamente.";
        } else {
            $mensaje = "Error al agregar el empleado.";
        }
    } else {
        $mensaje = "Por favor, completa todos los campos del formulario.";
    }
}

if(isset($_GET['id'])) {
    $dni = $_GET['id'];
    
    $query = "DELETE FROM empleados WHERE dni = :dni";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
    $stmt->execute();

    header("Location: views/ejercicio3.php");
    exit();
}

if(isset($_GET['id'])) {
    $dni = $_GET['id'];
    $query = "SELECT * FROM empleados WHERE dni = :dni";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
    $stmt->execute();
    $empleado = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($empleado)) {
    } else {
        $mensaje = "Empleado no encontrado.";
    }
} else {
    $mensaje = "ID de empleado no válido.";
}

$query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados";
$stmt = $dbh->prepare($query);
$stmt->execute();
$empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['nombre'])) {
    $nombreBuscado = $_GET['nombre'];

    if(empty($nombreBuscado)) {
        $query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados";
    } else {
        $query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados WHERE nombre = :nombre";
    }

    $stmt = $dbh->prepare($query);

    if(!empty($nombreBuscado)) {
        $stmt->bindParam(':nombre', $nombreBuscado, PDO::PARAM_STR);
    }

    $stmt->execute();
    $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}


require "views/ejercicio3.view.php";