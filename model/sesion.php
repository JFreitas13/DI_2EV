<?php
////LA COMENTO PORQUE DE MOMENTO NO SE ESTÁ USANDO
//
//class sesion {
//        //Iniciamos la sesión
//		function sesion () {
//            session_start();
//        }
//
//		//Método para registrar las variables de la sesión. Lo usaremos para guardar el nombre de usuario
//		public function set($admin) {
//            $_SESSION['rol'] = $admin;
//}
//
//		//Recupera el valor del nombre de usuario
//		public function get($usuario) {
//            if (isset($_SESSION[$usuario])) {
//                return $_SESSION[$usuario];
//            } else {
//                return false;
//            }
//}
//
//		//Borra la sesión y vuelve a la página inicial
//		public function borrarSesion() {
//            $_SESSION = array();
//            session_destroy();
//            header("Location: index.php");
//        }
//}