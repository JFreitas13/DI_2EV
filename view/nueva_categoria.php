<?php
session_start();
//si el usuario no es admin redirecciono a la home.
if($_SESSION['admin'] != 'admin') {
    header('Location: home_view.php');
}?>

<?php
include ("header.php");
require_once('../db/connect_db.php');
require_once ('../model/categoria_model.php');
require_once ('../controller/categoria_controller.php');

$conexion = new Conexion(); //instanciamos la BBDD
$modelo_categoria = new categoria_model($conexion->conectar()); //instanciamos la clase modelo y le pasamos el parametro de la conexion
$controlador_categoria = new categoria_controller($modelo_categoria); //instanciamos el controlador al que pasamos como parametros el modelo que acabamos de instanciar

if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
    //obtenemos los datos
    $nombre = $_POST["nombre"];
    //llamamos al metodo añadir del controler y pasamos los datos obtenidos
    $controlador_categoria->nuevaCategoria($nombre);
}
?>
<!--formulario para añadir categoria-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVA CATEGORIA</title>
</head>
<body>

<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <input type="submit" name="registro" value="Añadir">
</form>
</body>
</html>
