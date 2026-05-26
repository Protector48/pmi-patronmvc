<?php
require_once './models/Producto.php';//Para poder usar el modelo Producto
class ProductoController{
    private $producto;
    public function __construct()
    {
        $this->producto = new Producto();// Crea una instancia del modelo Producto
    }

    public function index()
    {
        $productos = $this->producto->Listar();// Llama al método Listar del modelo Producto para obtener los productos
        include './views/listar.php';// Carga la vista para mostrar los productos
    }

}