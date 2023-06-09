<?php

class usuario_model{

    private $conexion;

    public function __construct($conexion)
    {
         $this->conexion = $conexion;
    }

    public function registrar($nombre, $email, $password) {
          try {
               $passwordHash = password_hash($password, PASSWORD_DEFAULT); //encriptamos la contraseña con la funcion password_hash

               $consulta = "INSERT INTO usuario (nombre, email, password) VALUES (:nombre, :email, :password)";
               $stmt = $this->conexion->prepare($consulta);
               $stmt->bindParam(':nombre', $nombre);
               $stmt->bindParam(':email', $email);
               $stmt->bindParam(':password', $passwordHash);
               $stmt->execute();
               return $stmt;
          } catch (PDOException $e) {
               echo "ERROR: " . $e->getMessage();
          }
    }
}
?>
