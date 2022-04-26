<?php

namespace Controllers;

use Model\Compra;
use Model\CompraDetalle;
use MVC\Router;

class CompraController {

    public static function Compra (Router $router){


        $router->render("dashboard/compra",[]);
    }

    public static function listar(){

        $listado = Compra::compraXCliente();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }

    //el listar para cliente
    public static function clienteverFactura(){

            $cli_id =  $_SESSION['id'];
            $cli_id = filter_var($cli_id, FILTER_VALIDATE_INT); // me puede dar problemas
            $listado = Compra::consultaCliente($cli_id);
            echo json_encode([
                "data" => $listado
            ]);
    }

    public static function conseguirproductos(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cod_id = $_POST['cod_id'];
            $cod_id = filter_var($cod_id, FILTER_VALIDATE_INT); // me puede dar problemas
            $listado = CompraDetalle::conseguirproductos($cod_id);
            echo json_encode([
                "data" => $listado
            ]);
        }        
    }
    //conseguirproducto para cliente lo mismo pero con el session
    public static function clientefactura(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //verificar que sea del cliente
            $cli_id =  $_SESSION['id'];
            $cli_id = filter_var($cli_id, FILTER_VALIDATE_INT); // me puede dar problemas
            $cod_id = $_POST['cod_id'];
            $cod_id = filter_var($cod_id, FILTER_VALIDATE_INT);
            //metodo de verificación
            $verificar = Compra::verificarCliente($cli_id);
            //obtener datos si sale que el CLI_ID no tiene dicha factura
            if ($verificar->num_rows == 0) {
                echo json_encode([
                    "data" => "false"
                ]);
            } else {
                $listado = CompraDetalle::conseguirproductos($cod_id);
                echo json_encode([
                    "data" => $listado
                ]);
            }
        }        
    }


}