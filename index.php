<?php

//require_once ('../usuario_controller.php');
include ("view/header.php");

//iniciarSesion();

?>

<!-- página principal -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
        <a href="/AA_2_JoanaFreitas/view/registrar_view.php<?php echo '?registrar'; ?>" class="btn btn-info" type="button">Registrarse</a> <!-- botón de registrar -->
        <a href="/AA_2_JoanaFreitas/view/login_view.php" class="btn btn-warning" type="button">Login</a> <!-- botón de login -->
    </form>
</nav>
