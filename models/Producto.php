<?php


require_once './conexion.php';//Para poder hacer persistencia a la DB
class Producto{
    private $conexion;
    public function __construct()
    {
        $this->conexion = new Conexion();
    }
    public function Listar()
    {
        $sql = "SELECT * FROM productos";// Consulta SQL para obtener todos los productos
        $stmt = $this->conexion->conectar()->prepare($sql);// Prepara la consulta SQL
        $stmt->execute();// Ejecuta la consulta SQL
        return $stmt->fetchAll(PDO::FETCH_ASSOC);// Devuelve los resultados como un array asociativo
    }
}