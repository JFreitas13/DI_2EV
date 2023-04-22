<?php

//La carpeta donde buscaremos los controladores
define('CONTROLLERS_FOLDER', 'controller/');

// si no se indica un controlador, este es el controlador que usará
define('DEFAULT_CONTROLLER', 'productos');

// si no se indica una accion, esta accion sera la que usara
define('DEFAULT_ACTION', "listarProductoCategoria");

//Obtenemos el controlador
//si el usuario no lo introduce, seleccionamos el de por defecto
$controller = DEFAULT_CONTROLLER;
if ( !empty ($_GET['controller']))
    $controller = $_GET['controller'];

//Obtenemos la accion introducida
//Accion por defecto si no es introducida por el usuario
$action = DEFAULT_ACTION;
if (!empty ($_GET['action']))
    $action = $_GET['action'];

//Ya tenemos el controlador y la accion
//Formamos el nombre del fichero que contiene nuestro controlador
$controller = CONTROLLERS_FOLDER . $controller . '_controller.php';

//si la variable ($controller) es un ficehro lo requerimos
if ( is_file($controller))
    require_once ($controller);
else
    die ('El controlador no existe - 404 not found');

//Si la variable $action es una funcion la ejecutamos o detenemos el script
if (is_callable($action))
    $action();
else
    die ('La accion no existe - 404 not found');