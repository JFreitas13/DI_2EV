<?php

class producto_model {

    public $conexion;

    /**
     * @param $conexion
     */
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function nuevoProducto($nombre, $precio, $id_categoria) {

        try {
            $consulta = "INSERT INTO producto (nombre, precio, id_categoria) VALUES (:nombre, :precio, :id_categoria)";
            $stmt = $this->conexion->prepare($consulta);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':precio', $precio);
            $stmt->bindParam(':id_categoria', $id_categoria);
            $stmt->execute();
            return $this->conexion->lastInsertId();

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

      public function getProductos() {

        try {
            $consulta = "SELECT id,nombre, precio, id_categoria FROM producto";
            $stmt = $this->conexion->query($consulta);
            $productos = array();
            while ($producto = $stmt->fetch()) {
                $productos[] = $producto;
                return $productos;}

        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

//    public function eliminarCategoria($id) {
//
//        try {
//            $consulta = "DELETE FROM categoria WHERE id = :id";
//            $stmt =$this->conexion->prepare($consulta);
//            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//            return $stmt->execute();
//            //
//            //$result = $stmt->execute();
////
////            $stmt->execute(['id' =>$id]);
//        } catch (PDOException $e) {
//            echo "ERROR: " . $e->getMessage();
//        }
//    }
//
//    public function update($id, $nombre) {
//        function update($id) {
//            $db = getConnection();
//            $result = $db->prepare('UPDATE categoria SET nombre=:nombre WHERE id=:id');
//            $result->bindParam(':id', $id);
//            $result->bindParam(':nombre', $nombre);
//            $result->execute();
//        }
//    }

}