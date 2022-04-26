<?php

namespace Controllers;

use Model\Categoria;
use MVC\Router;

use Intervention\Image\ImageManagerStatic as Image;

class CategoriaController
{

    public static function index(Router $router)
    {
        $router->render('dashboard/categoria', []);
    }

    public static function create(Router $router){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $categoria = new Categoria($_POST);
            $verificarNombre = $categoria->verificarNombre();
            if ($verificarNombre->num_rows == 0) {
                $resultado = $categoria->crear(); 
                
                if($resultado) {
                    $listado = Categoria::listar();
                    $json = json_encode([
                        "STATUS"=>1,
                        "mensaje"=>"Registro Correcto",
                        "listas"=>$listado,
                        "c"=>$categoria
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
                    "mensaje"=>"Esta categoria ya existe!!!",
                    "c"=>$categoria
                ]);   
            }
            echo $json;
        }
    }

    public static function listados()
    {

        $listados = Categoria::listar();

        $json = json_encode([
            "data" => $listados
        ]);

        echo $json;
    }

    public static function cambiarEstado()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $categoria = new Categoria($_POST);

        if ($categoria->cat_activo == "1") {

            $categoria->cat_activo = "0";
            $resultado = $categoria->actualizarEstado();

        } else {
            $categoria->cat_activo = "1";
            $resultado = $categoria->actualizarEstado();
        }
        
        echo json_encode([
            "bool" => $resultado,
            "cat_activo" =>  $categoria->cat_activo
        ]);
        }
    }

    public static function getCategoria(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            $resultado = Categoria::find($id);

            echo json_encode([
                "data" => $resultado
            ]);
        }
    }

    public static function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoria = Categoria::find($_POST['id']);
            $categoria->sincronizar($_POST);

            $resultado = $categoria->actualizar();
          
            echo json_encode([
                "resp" => $resultado,
            ]);;
        }
        
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            $categoria = Categoria::find($id);
            $resultado = $categoria->eliminar();
            
            echo json_encode([
                "res"=>$resultado
            ]);
        }
    }

    public static function buscarNomCat(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $cat_nombre = $_POST['nombre'];
            $resultado = Categoria::listarNombre($cat_nombre);

            echo json_encode([
                "list"=> $resultado
            ]);
        }
    }

    public static function pagination(){
        $cat = new Categoria();
        $get = filter_var($_GET['pag'], FILTER_VALIDATE_INT);

        $pagination = $cat->listarLimit(2, $get);
        echo json_encode([
            "pags"=>$pagination['pags'],
            "res"=>$pagination['limit']
        ]);
    }
}
