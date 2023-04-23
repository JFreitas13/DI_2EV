<?php
include ("view/header.php");
?>

<!-- página principal -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>

<p>Si ya estás registrado efectua login si no registrate primero.</p>
<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <a href="/AA_2_JoanaFreitas/view/registrar_view.php<?php echo '?registrar'; ?>" class="btn btn-info" type="button">Registrarse</a> <!-- botón de registrar -->
        <a href="/AA_2_JoanaFreitas/index_login_usuario.php" class="btn btn-warning" type="button">Login</a> <!-- botón de login -->
    </form>
</nav>
