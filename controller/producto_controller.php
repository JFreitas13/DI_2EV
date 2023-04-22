<?php
require_once ('../model/producto_model.php');

class categoria_controller{

    //atributo donde almacenamos la instancia del usuario_model
    private $modelo_producto;

    /**
     * @param $modelo_producto
     */
    public function __construct($modelo_producto) {
        $this->modelo_producto = $modelo_producto;
    }

    public function nuevoProducto($nombre, $precio, $id_categoria)
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
        $producto = new producto_model(null, $nombre, $precio, $id_categoria); //objeto con los datos del formulario
        $this->modelo_producto->nuevoProducto($nombre, $precio, $id_categoria); //

    }

    function updateCategoria($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->modelo_categoria->update($id, $_POST);
            header("Location: home_view");
            exit();
        } else {
            echo 'ERROOOOR';
        }
    }

    //por algun motivo no funciona. EN PROCESO. SE ATASCA EN EL CONTROLLER TAL COMO PASA CON EL LOGIN
    public function deleteCategoria($id)
    {
//        $resultado = $this->modelo_categoria->eliminarCategoria($id);
//        if ($resultado) {
//            header("Location: ../index_listar_categorias.php");
//        } else {
//            echo "Error al eliminar la categoria";
//        }

//        echo "error1";
        if (isset($_GET['action']) && !empty($_GET['action'])) {
            $accion = $_GET['action'];
            // Verificar la acción solicitada
            switch ($accion) {
                case 'eliminar':
                    // Verificar si se ha enviado un ID válido
                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                        $id = $_GET['id'];
                        // Llamar a la función eliminarUsuario del modelo para eliminar el usuario
                        $resultado = $this->modelo_categoria->eliminar($id);
                        if ($resultado) {
                            // Redirigir a la lista de usuarios con un mensaje de éxito
                            header("Location: ../index_listar_categorias.php");
                            exit;
                        } else {
                            // Redirigir a la lista de usuarios con un mensaje de error
                            echo "error";
                            exit;
                        }
                    }
            }
        }
    }

//        if ($this->modelo_categoria->eliminar($id)) {
//            header("Location: ../index_listar_categorias.php");
//        } else {
//            // Mostrar un mensaje de error si la eliminación falla
//            echo 'Error al eliminar el usuario';
//        }
//    }
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
