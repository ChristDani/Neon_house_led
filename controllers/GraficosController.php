<?php 

namespace Controllers;

use MVC\Router;

class GraficosController {

    public static function index(Router $router)
    {
        $router->render('dashboard/graficos', []);
    }
}