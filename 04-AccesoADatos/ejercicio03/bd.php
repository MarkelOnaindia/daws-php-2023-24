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
        $mensaje =  $e->getMessage();
        return false;
    }
}

function obtenerEmpleados($dbh) {
    try {
        $query = "SELECT * FROM empleados";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $empleados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $empleados;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

function obtenerEmpleadoPorDNI($dbh, $dni) {
    try {
        $query = "SELECT dni, nombre, apellidos, edad, sexo, fecha_de_nacimiento, curriculum FROM empleados WHERE dni = :dni";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':dni', $dni, PDO::PARAM_STR);
        $stmt->execute();
        $empleado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $empleado;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

$dbh = connect($host, $dbname, $user, $pass);    
