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


<?php
/*require_once('../db/connect_db.php');
require_once ('../model/usuario_model.php');
require_once ('../controller/usuario_controller.php');
require_once ('../model/sesion.php');

$conexion = new Conexion(); //instanciamos la BBDD
$modelo_usuario = new usuario_model($conexion->conectar()); //instanciamos la clase usuario_modelo y le pasamos el parametro de la conexion
$controlador_usuario = new usuario_controller($modelo_usuario); //instanciamos el controlador del usuario al que pasamos como parametros el modelo_usuario que acabamos de instanciar

        if(isset($_POST['login'])) {
//            $usario = new usuario_model($conexion);
//            //Verificamos que el nombre de usuario y la contraseña son correctos y, en ese caso, creamos la sesión y redirigimos
//            if($usario->obtenerUsuario($_POST['email'],$_POST['password'])) {
//                $sesion = new sesion();
//                $sesion->set('nombre',($_POST['email']));
//                header("Location: home_view.php");
//            } else {
//                echo "<div id='msg'>Nombre de usuario o contraseña incorrectos.</div>";
//            }
//}

            if (!isset($_POST['email'])) $error[] = "Por favor rellene el usuario";
            if (!isset($_POST['password'])) $error[] = "Por favor rellene la contraseña";

            $email = $_POST['email'];
            $password = $_POST['password'];
            if (strlen($email) > $num = 50) {
                $mensaje = '<p class="error-form">El campo <b>' . $email . '</b> debe ser menor que ' . $num . '</p>';
                $validacion = false;
                header("Location:" . $_SERVER['PHP_SELF'] . "?login_view=no&campo=$email");

            } elseif ($email == "") {
                $validacion = false;
                $mensaje = '<p class="error-form">El campo <b>' . $email . '</b> no puede estar vacío</p>'; //asigna mensaje de error.
                header("Location:" . $_SERVER['PHP_SELF'] . "?login_view=no&campo=$email"); //redirecciona detallando el campo que falló.)

            } elseif (strlen($password) < $num = 4) {
                $mensaje = '<p class="error-form">El campo <b>' . $password . '</b> debe ser mayor o igual que ' . $num . '</p>';
                $validacion = false;
                header("Location:" . $_SERVER['PHP_SELF'] . "?login_view=no&campo=$password");

            } elseif ($password == "") {
                $validacion = false;
                $mensaje = '<p class="error-form">El campo <b>' . $password . '</b> no puede estar vacío</p>'; //asigna mensaje de error.
                header("Location:" . $_SERVER['PHP_SELF'] . "?login_view=no&campo=$email"); //redirecciona detallando el campo que falló.)
            }

//            if ($validacion) {
//
//                if ($usuario = $controlador_usuario->login($_POST["email"], $_POST["password"])) {
//                    $_SESSION['email'] = $usuario;
//                    header('Location: home_view.php');
//                    exit;
//                } else {
//                    $error[] = 'Nombre de usuario o contraseña incorrectos o aún no estás registrado.';
//                }
//            }
        }

//end if submit
*/?>


