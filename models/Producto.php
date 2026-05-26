<?php


require_once './conexion.php';// Incluye la clase de conexión a la base de datos
class Producto{
    private $conexion;
    public function __construct()
    {
        $this->conexion = new Conexion();
    }
    public function Listar()
    {
        $sql = "SELECT * FROM productos";
        $stmt = $this->conexion->conectar()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}