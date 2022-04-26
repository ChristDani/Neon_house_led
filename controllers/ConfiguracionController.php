<?php 

namespace Controllers;

use MVC\Router;

class ConfiguracionController {
    public static function index(Router $router)
    {
        $router->render('dashboard/configuracion', []);
    }
    
}