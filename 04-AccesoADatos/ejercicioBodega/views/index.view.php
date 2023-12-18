<?php
require "bd.php";
$bodegas = obtenerBodegas($dbh);
require "views/partials/header.php";
?>
        <form action="views/anadir.view.php" method="POST">
            <input type="submit" value="+ Añadir Bodega">
        </form>
        <form action="views/bodegas.view.php" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bodegas as $bodega): ?>
                        <tr>
                            <td><?php echo $bodega['nombre']; ?></td>
                            <td><?php echo $bodega['direccion']; ?></td>
                            <td><?php echo $bodega['email']; ?></td>
                            <td><input type="submit" value="entrar"><input type="submit" value="borrar"></td>
                        </tr>
                    <?php endforeach; ?>            
                </tbody>
            </table>
        </form>

<?php require "views/partials/footer.php" ?>
