<?php

namespace Controllers;

use Model\Cliente;
use MVC\Router;

class ClienteController {

    public static function index (Router $router){


        $router->render("dashboard/cliente",[]);
    }

    public static function listar(Router $router){

        $listado = Cliente::listar();
       
        $json = json_encode([
            "data" => $listado
        ]);
        echo $json;
    }



    public static function create(Router $router){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST['cli_clave'] = password_hash($_POST['cli_clave'], PASSWORD_DEFAULT);
            $cliente = new Cliente($_POST);
            $verificarCorreo = $cliente->verificarCorreo();
            if ($verificarCorreo->num_rows == 0) {
                $resultado = $cliente->crear(); 
                
                if($resultado) {
                    $listado = Cliente::listar();
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Registro Agregado",
                        "listas"=>$listado,
                        "c"=>$cliente
                    ]);
                }  else {
                    $json = json_encode([
                        "STATUS"=>2,
                        "mensaje"=>"Error al registrar",
                        "c"=>$cliente,
                        "b"=>$resultado,
                    ]);
                } // habria un tercer caso con no se puede borrar padres
            }
            //ya existe
            else {
                $json = json_encode ([
                    "STATUS"=>2,
                    "mensaje"=>"Este correo ya existe!!!",
                    "c"=>$cliente
                ]);   
            }
            echo $json;
        }
    }
    public static function createRegistro(Router $router){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST['cli_clave'] = password_hash($_POST['cli_clave'], PASSWORD_DEFAULT);
            $_POST['cli_rol'] = 2; //siempre sera cliente
            $_POST['cli_estado'] = 0; //siempre empezara como usuario inactivo
            $cliente = new Cliente($_POST);
            $verificarCorreo = $cliente->verificarCorreo();
            if ($verificarCorreo->num_rows == 0) {
                $resultado = $cliente->crear(); 
                
                if($resultado) {
                    $listado = Cliente::listar();
                    //agregar metodo para enviar correo de verificacion
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Estas Registrado",
                        "listas"=>$listado,
                        "c"=>$cliente
                    ]);
                }  else {
                    $json = json_encode([
                        "STATUS"=>2,
                        "mensaje"=>"Error al Registrar",
                        "c"=>$cliente,
                        "b"=>$resultado,
                    ]);
                } // habria un tercer caso con no se puede borrar padres
            }
            //ya existe
            else {
                $json = json_encode ([
                    "STATUS"=>2,
                    "mensaje"=>"Este correo ya existe!!!",
                    "c"=>$cliente
                ]);   
            }
            echo $json;
        }
    }

    
    public static function getCliente(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
            $id = $_POST['id'];
            $id = intval($id);
            $cliente = Cliente::find($id);
            $json = json_encode([
                "data"=>$cliente
            ]);
            echo $json;
        }
    }

    public static function delete(Router $router){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $cliente = Cliente::find($id);
            $resultado = $cliente->eliminar();

            echo json_encode([
                "res"=>$resultado
            ]);

            //$json = json_encode($resultado);
            //echo $json;
        }
    }

    public static function update(){
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if ($_POST['cli_clave'] != null) {
                $_POST['cli_clave'] = password_hash($_POST['cli_clave'], PASSWORD_DEFAULT);
            };            
            $cliente = Cliente::find($_POST['id']);

            $cliente->sincronizar($_POST);
            $dd = $cliente->actualizar();
            $json = json_encode($dd);
            echo $json;
        }
        
    }

    //HACER UN UPDDATE 2 PARA CLIENTE, DE SU MODULO, EN ESTE EL CLI ROL DEBE SER SIEMPRE 2 Y VERIFICADO SI CAMBIA EL CORREO DEBE SER 2

            //if ($cliente->cli_correo == $POST['cli_email'])


    public static function update2(){

        $cliente = Cliente::find($_SESSION['id']);
        //if es para la verificacion de correo
    
        if($cliente->cli_email == $_POST['cli_email']){

            $_POST['cli_verificado'] = 2;
        }

        //seguridad no cambiar contra, id
            $_POST['cli_rol'] = 2; //sera cliente                
         
        if (isset($_POST['id'], $_POST['cli_clave'], $_POST['cli_estado'])){
           
            $json = json_encode([
                "STATUS"=>2,
                "mensaje"=>"Error al Actualizar",
            ]);
            echo $json;
        }
            else {
                $cliente->sincronizar($_POST);
                $dd = $cliente->actualizar();
                               
                $json = json_encode([
                    "STATUS"=>1,
                    "mensaje"=>"Actualizado Correctamente",
    
                ]);
                echo $json;
            }


    }
         
     //   

    

    public static function estado()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cliente = new Cliente($_POST);        

        if ($cliente->cli_estado == "1") {

            $cliente->cli_estado = "0";
            $resultado = $cliente->editEstado();

        } else {
            $cliente->cli_estado = "1";
            $resultado = $cliente->editEstado();
        }
        //ESTO SIRVE NO ES UN SOLO IMPRIMIR
        echo json_encode([
            "cli_estado" => $cliente->cli_estado,
            "resultado" => $resultado
        ]);

        }
    }

   
}