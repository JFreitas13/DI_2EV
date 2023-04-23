<?php
require './db/db_connect.php'; //conexión a BBDD

function login($email, $password) {

    try {
        $db = getConnection();

        $stmt = $db->prepare("SELECT * FROM usuario WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        $passwordDb = $usuario['password'];
        $adminDB = $usuario['admin'];

        if($usuario != null){
            if(password_verify($password, $passwordDb) && $adminDB == 'admin') {
                session_start();          //Iniciamos la sesión para luego recuperarla
                $_SESSION['id']=$usuario['id']; //añadimos el id
                $_SESSION['nombre']=$usuario['nombre']; //añadimos el username
                $_SESSION['admin']=$usuario['admin']; //añadimos el rol

                header('Location: ./view/home_view.php');
                echo "Contraseña Valida";
            } elseif(password_verify($password, $passwordDb) && $adminDB == 'user') {
                    session_start();          //Iniciamos la sesión para luego recuperarla
//                $_SESSION['id']=$usuario['id']; //añadimos el id
//                $_SESSION['email']=$usuario['email']; //añadimos el username
                    $_SESSION['admin']=$usuario['admin']; //añadimos el rol
                header('Location: ./view/home_view.php');
            }else{
                echo "La contraseña no es correcta";
//            header('Location: index_registar.php');
            }
        } else {
            echo "Usuario no existe en la BBDD";
//            header('Location: index_registar.php');
        }

    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
    }
}

//    function cryptconmd5($password) {
//        //Crea un salt
//        $salt = md5($password . "%*4!#$;.k~’(_@");
//        $password = md5($salt . $password . $salt);
//        return $password;
//    }
