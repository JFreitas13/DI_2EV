<?php
require_once ('../model/categoria_model.php');

class categoria_controller
{


    //atributo donde almacenamos la instancia del usuario_model
    private $modelo_categoria;
    private $conexion;

    /**
     * @param $modelo_categoria
     */
    public function __construct($modelo_categoria) {
        $this->modelo_categoria = $modelo_categoria;
    }

    // Crear la nueva categoria
    public function nuevaCategoria($nombre) {

        //compruebo si ya existe
        if($this->verificarCategoria($nombre)) {
            echo "La categoria ya existe.";
        } else {
            $resultado = $this->modelo_categoria->nuevaCategoria($nombre);
            if ($resultado) {
                header("Location: ../index_listar_categorias.php");;
            } else {
                return "ERROR";
            }
        }
    }

    //verificar si la categoria ya existe o no.
    private function verificarCategoria($nombre)
    {
        require ("../db/db_connect.php");
        $db = getConnection();
        $consulta = "SELECT COUNT(*) FROM categoria WHERE nombre = (:nombre)";
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count > 0;
    }




}
