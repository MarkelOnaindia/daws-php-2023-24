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

function agregarEmpleado($dbh, $dni, $nombre, $apellidos, $edad, $sexo, $fecha, $curriculum) {
    try {
        $query = "INSERT INTO empleados (dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum) 
                  VALUES (:dni, :nombre, :apellidos, :edad, :sexo, :fecha, :curriculum)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $apellidos, PDO::PARAM_STR);
        $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
        $stmt->bindParam(':sexo', $sexo, PDO::PARAM_STR);
        $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR);
        $stmt->bindParam(':curriculum', $curriculum, PDO::PARAM_STR);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

$dbh = connect($host, $dbname, $user, $pass);

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

    header("Location: ejercicio2.php");
    exit();
}

$query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados";
$stmt = $dbh->prepare($query);
$stmt->execute();
$empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "ejercicio2.view.php";