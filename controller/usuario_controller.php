<?php

require_once('../model/usuario_model.php');

class usuario_controller
{
    //atributo donde almacenamos la instancia del usuario_model
    private $modelo_usuario;

    //constructor
    public function __construct($modelo_usuario)
    {
        $this->modelo_usuario = $modelo_usuario;
    }

    //modelo para crear usuario
    public function registrarUsuario($nombre, $email, $password)
    {
        // Comprobar si el correo electrónico ya existe en la base de datos
        if ($this->verificarUsuario($email)) {
            echo "Usuario ya registrado";
        } else {
            // Crear el nuevo usuario
            $resultado = $this->modelo_usuario->registrar($nombre, $email, $password);
            if ($resultado) {
                header("Location: ../index_login_usuario.php");;
            } else {
                return "ERROR";
            }
        }
    }

    //verificar si el correo ya existe o no.
    private function verificarUsuario($email)
    {
        require("../db/db_connect.php");
        $db = getConnection();
        $consulta = "SELECT COUNT(*) FROM usuario WHERE email = (:email)";
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count > 0;
    }
}

?>
