<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Listado de Ventas</title>
</head>
<body>
<h3>LISTADO DE VENTAS</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Fecha</th>
        <th>ID Producto</th>
        <th>ID Usuario</th>
    </tr>
    <?php
    foreach ($ventas as $venta) {  ?>
        <tr>
            <td> <?php echo $venta['id'] ?></td>
            <td> <?php echo $venta['fecha'] ?></td>
            <td> <?php echo $venta['id_producto'] ?></td>
            <td> <?php echo $venta['id_usuario'] ?></td>
    <?php } ?>
        </tr>

</table>


<p><a href="AA_2_JoanaFreitas/index_listar_productos.php">Volver</a></p> <!-- nos lleva al formulario de añadir categoria -->
</body>
</html>
