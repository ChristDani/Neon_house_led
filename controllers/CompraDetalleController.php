<?php

namespace Controllers;

use Model\CompraDetalle;
use MVC\Router;

class CompraDetalleController {

    public static function CompraDetalle (Router $router){


        $router->render("dashboard/compraDetalle",[]);
    }

    public static function listar(){

        $listado = CompraDetalle::compradetXProducto();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }

}