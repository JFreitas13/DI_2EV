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
//    $nombre = $_POST["nombre"];
//    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
//    $controlador_categoria->nuevaCategoria($nombre);
//    header("Location: ../index_listar_categorias.php"); //redirecciono a la home porque me falla al redireccionar al index de listado. TODO : ver como hacerlo
//}
//?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVO PRODUCTO</title>
</head>
<body>

<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label for="nombre">Precio:</label>
    <input type="text" name="precio" required><br>
    <label for="id_categoria">Categoria: </label>
        <?php
            $user = 'root';
            $pwd = '';
            $db = new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
            ?>
        <select>
            <option value="">Elige una categoria</option>
            <?php
            //$conexion = new Conexion(); //instanciamos la BBDD
            $stmt = $db->prepare('SELECT * FROM categoria');
            $stmt->execute();
            $categorias = $stmt->fectAll();
            //$stmt->execute();
    //        $categorias = array();
    //        while ($categoria = $stmt->fetch()) {
    //            $categorias[] = $categoria;
    //            return $categorias;
    //        }

            foreach ($categorias as $categoria):
                echo '<option value="'.$categoria['id'].'">'.$categoria['nombre'].'</option>';
    endforeach;
            ?>
        </select>
    <input type="submit" name="registro" value="Añadir">
</form>
</body>
</html>
