<?php
require_once ('../model/categoria_model.php');

class categoria_controller
{

    //atributo donde almacenamos la instancia del usuario_model
    private $modelo_categoria;

    /**
     * @param $modelo_categoria
     */
    public function __construct($modelo_categoria)
    {
        $this->modelo_categoria = $modelo_categoria;
    }


    public function nuevaCategoria($nombre)
    {
        //validar que los datos no estén vacios
        if ($nombre == '') {
            $error = 'ERROR: Por favor, introduce todos los campos requeridos.!';
        }
        //EJEMPLO DE VALIDACION. todo: pasar de usuario a categoria
//            // Comprobar si el correo electrónico ya existe en la base de datos
//            if ($this->modelo_usuario->existeCorreoElectronico($email)) {
//                throw new Exception("El correo electrónico ya existe en la base de datos.");
//            }
        // Crear la nueva categoria
        $categoria = new categoria_model(null, $nombre); //objeto con los datos del formulario
        $this->modelo_categoria->nuevaCategoria($nombre); //

    }

    //por algun motivo no funciona. EN PROCESO. SE ATASCA EN EL CONTROLLER TAL COMO PASA CON EL LOGIN
    public function eliminar($id) {
        if ($this->modelo_categoria->eliminar($id)) {
            header("Location: ../index_listar_categorias.php");
        } else {
            // Mostrar un mensaje de error si la eliminación falla
            echo 'Error al eliminar el usuario';
        }
    }
//        if($_SERVER['REQUEST_METHOD'] == 'POST') {

        //$categoria = new categoria_model($this->modelo_categoria); //objeto con los datos del formulario
        // Verificar si se ha enviado un ID válido
//        if (isset($_GET['id']) && !empty($_GET['id'])) {
//            $id = $_GET['id'];
//            // Llamar a la función eliminarUsuario del modelo para eliminar el usuario
//            $resultado = $this>$this->modelo_categoria->eliminar($id);
//            if ($resultado) {
//                // Redirigir a la lista de usuarios con un mensaje de éxito
//                header("Location: ../index_listar_categorias.php");
//                exit;
//            }
//            }
//            $this->modelo_categoria>eliminar($id);
//            header("Location: ../index_listar_categorias.php");

//        $id = $_REQUEST['id'];
//        $this->modelo_categoria->eliminar($id);
//        header("Location home_view.php");

//        if ($_GET['action'] == 'deleteCategoria') {
//            // Eliminar el registro por su ID
//            $id = $_GET['id'];
//            $resultado = $this->modelo_categoria->deleteCategoria($id);
//            if ($resultado) {
//                header('"Location: index_listar_categorias.php"');
//            } else {
//                echo 'Error al eliminar el registro';
//            }
//        }
    }
