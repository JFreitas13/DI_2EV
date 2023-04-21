<?php

//PRUEBAS VARIAS. NO BORRO DE MOMENTO. INTENTABA REPLICAR EL REGISTRO
//require_once('../db/connect_db.php');
//require_once ('../model/categoria_model.php');
//require_once ('../controller/categoria_controller.php');
//
//$conexion = new Conexion(); //instanciamos la BBDD
//$modelo_categoria = new categoria_model($conexion->conectar()); //instanciamos la clase usuario_modelo y le pasamos el parametro de la conexion
//$controlador_categoria = new categoria_controller($modelo_categoria); //instanciamos el controlador del usuario al que pasamos como parametros el modelo_usuario que acabamos de instanciar
//
////if (isset($_GET['id']) && is_numeric($_GET['id'])) { //verificamos que se ha enviado la solicitud de POST
////    //obtenemos los datos
////    $id = $_GET['id'];
////    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
////    $controlador_categoria->deleteCategoria($id);
////    header("Location: AA_2_JoanaFreitas/index_listar_categorias.php");
////}
//
//if(isset($_POST["deletecategoria"])) {
//    $id = $_POST['id'];
//    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
//    $controlador_categoria->deleteCategoria($id);
//    header("Location: AA_2_JoanaFreitas/index_listar_categorias.php");
//}
//?>


<!--
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Eliminar Categoria</title>
</head>
<body>

<h2 class="title-form">Eliminar Cuenta</h2>
<p class="warning-form">Estás a punto de eliminar esta categoria. Esta acción nopuede deshacerse.</p>

<div class="div-input">
    <input type="text" class="user-form" id="id" name="id" placeholder="ID"  >
    <label class="label-user-form" id="label-form" </label>
</div>
<div class="div-input">
    <input type="text" class="user-form" name="nombre" placeholder="Nombre categoria" >
    <label class="label-user-form" id="label-form" </label>
</div>


<div class="btn-datos"><input type="submit" id="deletecategoria" name="deletecategoria" value="Confirmar">
    <input type="submit" id="canceldelete" name="canceldelete" value="Cancelar"></div>
</body>
</html>
-->
<?php
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
//    $id = $_POST["id"];
//    //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
//    $controlador_categoria->eliminar($id);
//    header("Location: ../index_listar_categorias.php"); //redirecciono a la home porque me falla al redireccionar al index de listado. TODO : ver como hacerlo
//}
?>



<h1>Delete product</h1>

<p>¿Estás seguro de que quieres eliminar esta categoria?</p>
<form action="/controller/usuario_controller.php?action=eliminar?id=" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" name="eliminar" value="Eliminar">
</form>

