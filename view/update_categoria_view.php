<?php
//include ("header.php");
//require_once('../db/connect_db.php');
//require_once ('../model/categoria_model.php');
//require_once ('../controller/categoria_controller.php');
//
//$conexion = new Conexion(); //instanciamos la BBDD
//$modelo_categoria = new categoria_model($conexion->conectar()); //instanciamos la clase usuario_modelo y le pasamos el parametro de la conexion
//$controlador_categoria = new categoria_controller($modelo_categoria); //instanciamos el controlador del usuario al que pasamos como parametros el modelo_usuario que acabamos de instanciar
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
//    //obtenemos los datos
//    $id = $_POST['id'];
//    $nombre = $_POST["nombre"];
//    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
//    $controlador_categoria->updateCategoria($id, $nombre);
//    header("Location: ../index_listar_categorias.php"); //redirecciono a la home porque me falla al redireccionar al index de listado. TODO : ver como hacerlo
//}
//?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVA CATEGORIA</title>
</head>
<body>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div>
        <p><strong>ID:</strong> <?php echo $id; ?></p>
        <strong>Nombre: </strong> <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br/>
        <input type="submit" name="submit" value="Submit">
    </div>
</form>
</body>
</html>
