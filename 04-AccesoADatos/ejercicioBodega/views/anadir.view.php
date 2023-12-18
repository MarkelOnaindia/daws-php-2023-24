<?php require "partials/header.php";?>

    <h1>Nueva Bodega</h1>
    <a href="../index.php">Volver</a>
    <form action="anadir.view.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="nombre" require>  
        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" placeholder="direccion" require>  
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="email" require>  
        <label for="telefono">Telefono</label>
        <input type="tel" id="telefono" name="telefono" placeholder="telefono" require>  
        <label for="contacto">Persona de contacto</label>
        <input type="text" id="contacto" name="contacto" placeholder="persona de contacto" require>  
        <label for="fundacion">Año de fundacion</label>
        <input type="number" id="fundacion" name="fundacion" placeholder="año de fundacion" max="2024" min="1800" require>  
        <label for="comentario">Comentario</label>
        <input type="text" id="comentario" name="comnetario" placeholder="comentario" require>  
        <label>¿Dispone de restaurante?</label>
        <div>
            <label for="si1">Si</label>
            <input type="radio" id="si1" name="rb1">
            <label for="no1">No</label>
            <input type="radio" id="no1" name="rb1">
        </div>
        <label>¿Dispone de hotel?</label>
        <div>
            <label for="si2">Si</label>
            <input type="radio" id="si2" name="rb2">
            <label for="no2">No</label>
            <input type="radio" id="no2" name="rb2">
        </div>
    </form>
    
<?php require "partials/footer.php";?>