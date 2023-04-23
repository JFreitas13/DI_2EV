<?php

//este controllet lista el sistema de index

//Función listar todas las categorias
function listar() {
    require 'model/categorias_model.php';
    //Le pide al modelo todas las categorias
    $categorias = getCategorias(); //funcion creada dentro de categoria_model
    //Pasa a la vista toda la informacion que se desea representar
    include ('view/listar_categorias_view.php'); //se lo pasamos a la vista especifica
}

//Función para borrar categoria
function deleteCategoria() {
    if(isset($_GET['id']) && is_numeric($_GET['id']))
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
    //Incluimos el modelo correspondiente
    require 'model/categorias_model.php';
    $categoria = delete($id);
    include 'view/home_view.php';
}

//Función modificar categoria TODO: no está terminado
function updateCategoria()
{
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        // obtener el valor de ID mediante el método GET
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        include 'view/update_categoria_view.php';

        if (isset($_POST['modificar'])) {
            //confirma que el "ID" recibido es un valor válida antes
            // de obtener los datos del formulario
            if (is_numeric($_POST['id'])) {
                // obtiene los datos del formulario, asegurándonos que son válidos
                $id = $_POST['id'];
                $nombre = htmlspecialchars($_POST['nombre']);
                require 'model/categorias_model.php';
                $categoria = update($id);
                include 'view/home_view.php';
// guardamos los datos en la base de datos
            }
            //una vez guardados, redirigimos a la página principal
            header("Location: home_view.php");
        } else {
// Si el valor de "id" no es válidos, mostramos un mensaje de error
            echo 'Error!';
        }
    }
}