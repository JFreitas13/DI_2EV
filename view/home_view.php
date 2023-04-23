<?php

session_start();
//if (!isset($_SESSION['email'])) {
//    header('Location: index.php');
//    exit();
//}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['admin'];?></h1>

<?php
if($_SESSION['admin'] == 'admin') { ?>
<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <a href="/AA_2_JoanaFreitas/index_listar_categorias.php" class="btn btn-info" type="button">Categorias</a> <!-- llamamos al index que lista las categorias -->
        <a href="/AA_2_JoanaFreitas/index_listar_productos.php" class="btn btn-info" type="button">Productos</a>
        <a href="/AA_2_JoanaFreitas/index_listar_ventas.php" class="btn btn-info" type="button">Ventas</a>
    </form>
</nav>

<a href="cerrar_sesion.php">Cerrar sesión</a>

<?php } else {
    echo "FUNCIONA?";
} ?>

</body>
</html>