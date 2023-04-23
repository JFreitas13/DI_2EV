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
            return $stmt;

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function update($id) {

        $result = $this->conexion->prepare('UPDATE categoria SET nombre=:nombre WHERE id=:id');
        $result->bindParam(':id', $id);
        $result->execute();
    }

}