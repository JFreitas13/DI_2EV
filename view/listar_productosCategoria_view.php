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
        <tr>
            <td> <?php echo $producto['id'] ?></td>
            <td> <?php echo $producto['nombre'] ?></td>
            <td> <?php echo $producto['precio'] ?></td>
            <td> <?php echo $producto['id_categoria'] ?></td>
        </tr>

</table>


<p><a href="view/nuevo_producto.php">Añadir producto</a></p> <!-- nos lleva al formulario de añadir categoria -->
</body>
</html>
