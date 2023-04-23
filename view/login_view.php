<?php
include ("header.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>LOGIN</title>
</head>
<body>

<h3>Iniciar sesión</h3>
<form method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Iniciar sesión">
</form>

<p>¿Aún no estás registrado? <a href="view/registrar_view.php">Registrar</a>.</p>


