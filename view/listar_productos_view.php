<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Listado de Productos</title>
</head>
<body>
<h3>LISTADO DE PRODUCTOS</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php
    foreach ($productos as $producto) {  ?>
        <tr>
            <td> <?php echo $producto['id'] ?></td>
            <td> <?php echo $producto['nombre'] ?></td>
            <td> <?php echo $producto['precio'] ?></td>
            <td> <?php echo $producto['id_categoria'] ?></td>
            <td><a href="/index_listar_ventas.php?id=<?php echo $producto['id'] ?>">Ver Ventas</a></td> <!-- TODO. NO ESTA HECHO -->
            <td><a href="/index_editar_categorias.php?id=<?php echo $categoria['id'] ?>&nombre=<?php echo $categoria['nombre'] ?>">Editar</a></td> <!-- TODO. NO ESTA HECHO -->
            <td><a href="/index_borrar_categorias.php?id=<?php echo $categoria['id'] ?>" onclick="return confirm('¿Estás seguro que quieres eliminar la categoria?'); false">Eliminar</a></td> <!-- TODO: REVISAR PORQUE NO ELIMINA. SE QUEDA EN BLANCO Y NO SALTA MENSAJE DE ERROR -->
            <?php } ?>
        </tr>

</table>


<p><a href="index_nuevo_producto.php">Añadir producto</a></p> <!-- nos lleva al formulario de añadir categoria -->
</body>
</html>
