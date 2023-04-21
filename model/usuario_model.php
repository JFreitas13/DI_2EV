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
                    $password = self::cryptconmd5($password);

                    $consulta = "INSERT INTO usuario (nombre, email, password) VALUES (:nombre, :email, :password)";
                    $stmt = $this->conexion->prepare($consulta);
                    $stmt->bindParam(':nombre', $nombre);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':password', $password);
                    $stmt->execute();
                    return $this->conexion->lastInsertId();
                } catch (PDOException $e) {
                    echo "ERROR: " . $e->getMessage();
                }
            }

        public function login($email, $password) {

//            try {
//                $this->conexion->conectar();
//                //Recogemos todas las filas con las columnas user y password y las almacenamos en el array $rw
//                $consulta = $this->conexion->consultar("SELECT email, password FROM usuario");
//                if(count($consulta)) {
//                    for ($i=0;$i<count($consulta);$i++) {
//                        /*Si el usuario introducido coincide con uno almacenado en la base de datos y la función password_verify confirma
//                    que la contraseña introducida coincide con el hash de la almacenada, la función devuelve true para que el usuario pueda loguear*/
//                        if ($consulta[$i]['email'] == $email && password_verify($password,$consulta[$i]['password'])) {
//                            echo "Contraseña correcta";
//                            return true;
//                            break;
//                        }
//                    }
//                    }
//                } catch (PDOException $ex) {
//                    throw $ex;
//            }

            /*try {
                $password = self::cryptconmd5($password);

                $stmt = $this->conexion->prepare("SELECT nombre, email, password FROM usuarios WHERE email=:email AND password =:password");
                $stmt->execute(array(':email'=>$email, ':password'=>$password));
                $stmt = $stmt->fetch(PDO::FETCH_ASSOC);

                if($stmt){
                    $usuario = new usuario_model($this->conexion);
                    return $usuario;
                }else{
                    return $usuario = null;
                }
            } catch (PDOException $e) {
                return ("ERROR: " . $e->getMessage());
            }*/
            $password = self::cryptconmd5($password);

            $stmt = $this->conexion->prepare("SELECT nombre, email, password FROM usuarios WHERE email=:email AND password =:password");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute;

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        }


        public static function cryptconmd5($password) {
            //Crea un salt
            $salt = md5($password."%*4!#$;.k~’(_@");
            $password = md5($salt.$password.$salt);
            return $password;
        }


//        public static function registrar($email, $password) {
//            // Comprueba si el formulario ha sido enviado.
//            // Si se ha enviado, comienza el proceso el formulario y guarda los datos en la DB
//            if (isset($_POST['submit'])) {
//            // Obtenemos los datos del formulario, asegur�ndonos que son v�lidos.
//                $nombre = htmlspecialchars($_POST['nombre']);
//                $email = htmlspecialchars($_POST['email']);
//                $password = htmlspecialchars($_POST['password']);
//            // Comprueba que ambos campos han sido introducidos
//                if ($nombre == '' || $email == '' || $password =='') {
//            // Genera el mensaje de error
//                    $error = 'ERROR: Por favor, introduce todos los campos!';
//            // Si ning�n campo est� en blanco, muestra el formulario otra vez
//                    renderForm($nombre, $email, $password, $error);
//                } else {
//            // guardamos los datos en la base de datos
//                    try {
//                        $stmt = $dbh->prepare("INSERT INTO usuario (nombre, email, password) VALUES (:nombre, :email, :password)");
//                        $stmt->bindParam(':nombre', $_POST['nombre'], PDO::PARAM_STR);
//                        $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
//                        $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
//                        $stmt->execute();
//                    } catch (PDOException $e) {
//                        echo "ERROR: " . $e->getMessage();
//                    }
//                    /* Una vez que han sido guardados, redirigimos a la p�gina de vista principal*/
//                    header("Location: home_view.php");
//                }
//            } else // Si el formulario no han sido enviado, muestra el formulario
//            {
//                renderForm('', '', '');
//            }

        }
        ?>
