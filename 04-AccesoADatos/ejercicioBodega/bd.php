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

function obtenerBodegas($dbh) {
    try {
        $query = "SELECT * FROM bodega";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $bodegas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $bodegas;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

$dbh = connect($host, $dbname, $user, $pass);    


