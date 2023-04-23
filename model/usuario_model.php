<?php
    //conectar a la BBDD
    //include('../db/connect_db.php');

    class usuario_model{

        public $email;
        public $password;
        private $conexion;

        public function __construct($conexion) {
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
                    return $this->conexion->lastInsertId();
                } catch (PDOException $e) {
                    echo "ERROR: " . $e->getMessage();
                }
            }

        public function existeEmail($email) {
            //busco en la tabla si el correo que intenta registrar ya existe.
            $stmt = $this->conexion->prepare("SELECT email From usuario WHERE email=:email ");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($usuario != null) {
                echo "correo existe";
            }
        }

        }
        ?>
