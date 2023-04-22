<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Listado de Categorias</title>
</head>
<body>
<h3>PRODUCTOS DE LA CATEGORIA</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
    </tr>
    <?php
    foreach ($categorias as $categoria) {  ?>
    <tr>
        <td> <?php echo $categoria['id'] ?></td>
        <td> <?php echo $categoria['nombre'] ?></td>
        <td><a href="/index_listar_productos.php?id=<?php echo $categoria['id'] ?>">Ver Productos</a></td> <!-- TODO. NO ESTA HECHO -->
        <td><a href="/index_editar_categorias.php?id=<?php echo $categoria['id'] ?>&nombre=<?php echo $categoria['nombre'] ?>">Editar</a></td> <!-- TODO. NO ESTA HECHO -->
        <td><a href="/index_borrar_categorias.php?id=<?php echo $categoria['id'] ?>" onclick="return confirm('¿Estás seguro que quieres eliminar la categoria?'); false">Eliminar</a></td> <!-- TODO: REVISAR PORQUE NO ELIMINA. SE QUEDA EN BLANCO Y NO SALTA MENSAJE DE ERROR -->
        <?php } ?>
    </tr>

</table>


<p><a href="view/nueva_categoria.php">Añadir categoria</a></p> <!-- nos lleva al formulario de añadir categoria -->
</body>
</html>