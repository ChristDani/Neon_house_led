<?php

namespace Controllers;

use Model\Direcciones;
use MVC\Router;

class DireccionesController 
{
    public static function direcciones(Router $router){
        $router->render("dashboard/direcciones",[]);
    }

    public static function listar(Router $router){

        $listado = Direcciones::listar();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }


    public static function getDireccion(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $id = $_POST['id'];
            $id = intval($id);
            $direcciones = Direcciones::find($id);
            $json = json_encode([
                "data"=>$direcciones
            ]);
            echo $json;
        }
    }


    public static function update(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $direcciones = Direcciones::find($_POST['id']);
            $direcciones->sincronizar($_POST);

            $resultado = $direcciones->actualizar();
          
            echo json_encode([
                "dir" => $_POST,
                "res" => $resultado
            ]);
        }
        
    }
}
