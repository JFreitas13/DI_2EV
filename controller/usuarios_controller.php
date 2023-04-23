<?php

function loginUsuario() {
    include ('./view/login_view.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //verificamos que se ha enviado la solicitud de POST
        //obtenemos los datos
        $email = $_POST["email"];
        $password = $_POST["password"];

        require ('./model/usuario_login.php');
        //llamamos al metodo registrar del usuario_controller y pasamos los datos obtenidos
        $loginUsuario = login($email, $password);
    }
}
