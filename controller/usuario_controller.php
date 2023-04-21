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
        public function registrar($nombre, $email, $password)
        {
            //validar que los datos no estén vacios
            if ($nombre == '' || $email == '' || $password == '') {
                $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';
            }
//            // Comprobar si el correo electrónico ya existe en la base de datos
//            if ($this->modelo_usuario->existeCorreoElectronico($email)) {
//                throw new Exception("El correo electrónico ya existe en la base de datos.");
//            }
            // Crear el nuevo usuario
            $usuario = new usuario_model(null, $nombre, $email, $password); //objeto con los datos del formulario
            $this->modelo_usuario->registrar($nombre, $email, $password); //
        }

        public function login($email, $password) {

            // Instanciar el modelo de usuario
            $usuarioModel = $this->modelo_usuario->login($email,$password);

            // Verificar si el usuario existe y la contraseña es correcta
            if ($email && $password ) {
                // Iniciar sesión (por ejemplo, guardar el ID del usuario en una variable de sesión)
                // Redirigir al usuario a la página de inicio o panel de control
            } else {
                // Mostrar un mensaje de error en la vista (por ejemplo, "Usuario o contraseña incorrectos")
            }
        }
    }
    ?>
