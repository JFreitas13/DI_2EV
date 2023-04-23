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
    foreach ($ventas as $venta) {  ?>
        <tr>
            <td> <?php echo $venta['id'] ?></td>
            <td> <?php echo $venta['fecha'] ?></td>
            <td> <?php echo $venta['id_producto'] ?></td>
            <td> <?php echo $venta['id_usuario'] ?></td>
        </tr>
    <?php } ?>

</table>

<p><!--<a href="view/nuevo_producto.php">Añadir producto</a>--> <!-- nos lleva al formulario de añadir producto -->
    <a href="AA_2_JoanaFreitas/index_listar_productos.php">Volver</a> <!--opcion de regresar al listado de categorias -->
</p> <!-- nos lleva al formulario de añadir categoria -->
</body>
</html>
