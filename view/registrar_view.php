<?php
include ("header.php");
require_once('../db/connect_db.php');
require_once ('../model/usuario_model.php');
require_once ('../controller/usuario_controller.php');

$conexion = new Conexion(); //instanciamos la BBDD
$modelo_usuario = new usuario_model($conexion->conectar()); //instanciamos la clase usuario_modelo y le pasamos el parametro de la conexion
$controlador_usuario = new usuario_controller($modelo_usuario); //instanciamos el controlador del usuario al que pasamos como parametros el modelo_usuario que acabamos de instanciar

if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
    //obtenemos los datos
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
    $controlador_usuario->registrarUsuario($nombre, $email, $password);
}
?>

<!--página de registro-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>REGISTRO</title>
</head>
<body>

<h5>REGISTRATE</h5>

<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <input type="submit" name="registro" value="Registrar">
</form>
<br>
<p>Si ya estás registrado efectua el <a href="/AA_2_JoanaFreitas/index_login_usuario.php">login</a>.</p> <!-- nos lleva al formulario de login de usuario -->
</body>
</html>


