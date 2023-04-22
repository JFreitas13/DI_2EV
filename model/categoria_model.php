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

    //Funcion para recuperar categoria por id
    function getCategoria($id) {

        $db = getConnection();
        $query = ('SELECT * FROM categoria WHERE id = ?');
        $stmt = $db->prepare($query);
        $stmt->execute(array($id));
        $categoria = $stmt->fetch();
        return $categoria;
    }

    public function eliminarCategoria($id) {

        try {
            $consulta = "DELETE FROM categoria WHERE id = :id";
            $stmt =$this->conexion->prepare($consulta);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
            //
            //$result = $stmt->execute();
//
//            $stmt->execute(['id' =>$id]);
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function update($id, $nombre) {
        function update($id) {
            $db = getConnection();
            $result = $db->prepare('UPDATE categoria SET nombre=:nombre WHERE id=:id');
            $result->bindParam(':id', $id);
            $result->bindParam(':nombre', $nombre);
            $result->execute();
        }
    }



}