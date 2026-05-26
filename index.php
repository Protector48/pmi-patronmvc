<?php
require_once './controllers/ProductoController.php';//Para poder usar el controlador ProductoController
$controller = new ProductoController();// instancia del controlador

if (isset($_GET['guardar'])) {
    
} else {
    $controller->index();// Si no se especifica una acción, se muestra la lista de productos por defecto
}