<?php

class categoria_model {

    public $conexion;

    /**
     * @param $conexion
     */
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function nuevaCategoria($nombre) {

        try {
            $consulta = "INSERT INTO categoria (nombre) VALUES (:nombre)";
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->execute();
            return $this->conexion->lastInsertId();

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

      public function getCategorias() {

        try {
            $consulta = "SELECT id,nombre FROM categoria";
            $stmt = $this->conexion->query($consulta);
            //$stmt->execute();
            $categorias = array();
            while ($categoria = $stmt->fetch()) {
                $categorias[] = $categoria;
                return $categorias;
            }

//            $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
//            return ($categorias);

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function eliminar($id) {

        try {
            $consulta = "DELETE FROM categoria WHERE id = :id";
            $stmt =$this->conexion->prepare($consulta);
            //$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
            //
            //$result = $stmt->execute();
            if($stmt)
            return true;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }



}