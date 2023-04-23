<?php

require_once ('../model/usuario_model.php');

    class usuario_controller
    {

        //atributo donde almacenamos la instancia del usuario_model
        private $modelo_usuario;
        private $conexion;

        //constructor
        public function __construct($modelo_usuario)
        {
            $this->modelo_usuario = $modelo_usuario;
        }

        //modelo para crear usuario
        public function registrarUsuario($nombre, $email, $password) {
//            //validar que los datos no estén vacios
//            if ($nombre == '' || $email == '' || $password == '') {
//                $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';
//            }
            // Comprobar si el correo electrónico ya existe en la base de datos
            if ($this->modelo_usuario->existeEmail($email)) {
                header("Location: ./index_login_usuario.php");
            } else {
                // Crear el nuevo usuario
                $usuario = new usuario_model(null, $nombre, $email, $password); //objeto con los datos del formulario
                $this->modelo_usuario->registrar($nombre, $email, $password); //
            }
        }
    }
    ?>
