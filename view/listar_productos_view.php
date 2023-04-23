<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Listado de Productos</title>
</head>
<body>
<h3>LISTADO DE PRODUCTOS</h3>
<table border="1">
<!--    si el usuario es admin ve la tabla completa-->
    <?php if($_SESSION['admin'] == 'admin') { ?>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
    </tr>
    <?php
    foreach ($productos as $producto) {  ?>
        <tr>
            <td> <?php echo $producto['id'] ?> </td>
            <td> <?php echo $producto['nombre'] ?></td>
            <td> <?php echo number_format($producto['precio'], 2) ?> €</td>
            <td> <?php echo $producto['id_categoria'] ?></td>
<!--            <td><a href="/index_listar_ventas.php?id=--><?php //echo $producto['id'] ?><!--">Ver Ventas</a></td>-->
<!--            <td><a href="/index_editar_categorias.php?id=--><?php //echo $categoria['id'] ?><!--&nombre=--><?php //echo $categoria['nombre'] ?><!--">Editar</a></td> -->
            <td><a href="/index_borrar_productos.php?id=--><?php //echo $producto['id'] ?><!--" onclick="return confirm('¿Estás seguro que quieres eliminar este producto?'); false">Eliminar</a></td> <!-- TODO: REVISAR PORQUE NO ELIMINA. SE QUEDA EN BLANCO Y NO SALTA MENSAJE DE ERROR -->

            <?php } ?>
        </tr>
        <p> <a href="index_nuevo_producto.php">Añadir producto</a>
            <a href="view/home_view.php">Volver</a>
        </p> <!-- nos lleva al formulario de añadir categoria -->

    <!-- si no es admin solamente el listado de productos-->
    <?php } else { ?>
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
        <?php } ?>
    </tr>
        <p> <!-- nos lleva al formulario de añadir categoria -->
            <a href="view/home_view.php">Volver</a>
        </p>
<?php } ?>

</table>
</body>
</html>
