<?php
session_start();
//si el usuario no es admin redirecciono a la home.
if($_SESSION['admin'] != 'admin') {
    header('Location: home_view.php');
}?>

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
        </tr>
    <?php } ?>
</table>

<p>
    <a href="AA_2_JoanaFreitas/index_listar_categorias.php">Volver</a> <!--opcion de regresar al listado-->
</p>
</body>
</html>
