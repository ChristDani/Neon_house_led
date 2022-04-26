<?php

namespace Controllers;

use Model\Visitante;
use Model\VisitanteContacto;
use MVC\Router;

class VisitanteController {

    public static function index (Router $router){


        $router->render("dashboard/visitante",[]);
    }

    public static function listar(Router $router){

        $listado = Visitante::listar();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }



    public static function create(Router $router){ //verificar si el correo agregado existe, insertar create2 y que actualice en el panel
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $visitante = new Visitante($_POST);
            $verificarCorreo = $visitante->verificarCorreo();
            if ($verificarCorreo->num_rows == 0) {
                $resultado = $visitante->crear(); 
                
                if($resultado) {
                    $listado = Visitante::listar();
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Registro Agregado",
                        "listas"=>$listado,
                        "v"=>$visitante
                    ]);
                }  else {
                    $json = json_encode([
                        "STATUS"=>2,
                        "mensaje"=>"Error al registrar"
                    ]);
                } // habria un tercer caso con no se puede borrar padres
            }
            //ya existe
            else {
                $json = json_encode ([
                    "STATUS"=>2,
                    "mensaje"=>"Este correo ya existe!!!",
                    "v"=>$visitante
                ]);   
            }
            echo $json;
        }
    }
    
    public static function getVisitante(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $id = $_POST['id'];
            $id = intval($id);
            $visitante = Visitante::find($id);
            $json = json_encode([
                "data"=>$visitante
            ]);
            echo $json;
        }
    }

    public static function delete(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $visitante = Visitante::find($id);
            $el = $visitante->eliminar();
            $json = json_encode($el);
        
            echo $json;
        }
    }

    public static function update(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $visitante = Visitante::find($_POST['id']);// AGREGAR UN NUEVO UPDATE id -> correo
            $visitante->sincronizar($_POST);

            $dd = $visitante->actualizar();

            $json = json_encode($dd);

            echo $json;
        }
        
    }

    //--------------------------------//

    public static function create2(Router $router){ //verificar si el correo agregado existe, insertando create2 y que actualice en el panel
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $visitante = new Visitante($_POST);
            $verificarCorreo = $visitante->verificarCorreo();
            if ($verificarCorreo->num_rows == 0) {
                $resultado = $visitante->crear(); 

                $json = json_encode([
                   
                    "mensaje"=>"Visitante creado"
 
                ]);
             
            }

            else{
            
                //$visitante->sincronizar($_POST);
                $dd = $visitante->actualizarconCorreo();
    
                $json = json_encode([
                   
                    "mensaje"=>"Visitante actualizado"
 
                ]);
    
            
            }
 
            echo $json;
        } 
    

} 

/*


    public static function update2(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $visitante = Visitante::find($_POST['correo']);// AGREGAR UN NUEVO UPDATE id -> correo
            $visitante->sincronizar($_POST);

            $dd = $visitante->actualizar();

            $json = json_encode($dd);

            echo $json;
        }
        
    }
 
}
*/
}