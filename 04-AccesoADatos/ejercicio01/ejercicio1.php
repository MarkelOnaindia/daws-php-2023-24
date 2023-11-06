<?php
// Realiza la conexión a la base de datos y obtén los productos
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "practica4";

function connect($host, $dbname, $user, $pass){
    try {
        # MySQL
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

function agregarProducto($dbh, $nombreProducto) {
    try {
        $query = "INSERT INTO lista_compra (elemento) VALUES (:elemento)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':elemento', $nombreProducto, PDO::PARAM_STR);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

$dbh = connect($host, $dbname, $user, $pass);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreProducto = $_POST["producto"];
    
    if (!empty($nombreProducto)) {
        if (agregarProducto($dbh, $nombreProducto)) {
            echo "Producto agregado correctamente.";
        } else {
            echo "Error al agregar el producto.";
        }
    } else {
        echo "Por favor, ingresa el nombre del producto.";
    }
}

if (isset($_GET["vaciarLista"]) && $_GET["vaciarLista"] == 1) {
    try {
        $query = "DELETE FROM lista_compra";
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        echo "Lista de compras vaciada correctamente.";
    } catch (PDOException $e) {
        echo "Error al vaciar la lista de compras.";
    }
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $query = "DELETE FROM lista_compra WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: ejercicio1.php");
    } catch (PDOException $e) {
        echo "Error al eliminar el producto.";
    }
}

$query = "SELECT id, elemento FROM lista_compra";
$stmt = $dbh->prepare($query);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

require "ejercicio1.view.php";
