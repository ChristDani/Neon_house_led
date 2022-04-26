<?php

namespace Controllers;

use Model\Categoria;
use Model\Producto;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class ProductoController 
{
    public static function index(Router $router)
    {
        $router->render('dashboard/producto', []);
    }

    public static function listarP()
    {

        $listar = Producto::listarCatXProd();
        echo json_encode([
            "data" => $listar
        ]);
    }

    //creo que esto no sirve
    public static function obtenerCat()
    {
        $categoria = Categoria::listar();

        echo json_encode([
            "listCat" => $categoria
        ]);
    }

    ///productos para el frontend
    public static function conseguirproducto(Router $router)
    {
        $productos = Producto::listar();

        echo json_encode([
            "listPro" => $productos
        ]);
    }

    public static function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $producto = new Producto($_POST);
            $nombreImg = md5(uniqid(rand(), true)) . ".webp";

            if ($_FILES['pro_imagen']['tmp_name']) {
                $image = Image::make($_FILES['pro_imagen']['tmp_name'])->fit(800, 600);
                $producto->setImagen($nombreImg);
            }

            if (!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }

            $resultado = $producto->crear();

            if ($resultado) {
                $image->save(CARPETA_IMAGENES . $nombreImg);
            }

            echo json_encode([
                "resp" => $resultado
            ]);
        }
    }

    public static function getProducto()
    {
        $producto = Producto::listarCatXProd();
        $pr = new Producto();

        echo json_encode([
            "lists" => $producto
        ]);
    }

    public static function getProductoId()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            $producto = Producto::find($id);

            echo json_encode([
                "data" => $producto
            ]);
        }
    }

    public static function actualizar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $producto = Producto::find($_POST['id']);
            $producto->sincronizar($_POST);
            // $nombreImg = md5(uniqid(rand(), true)) . ".webp";

            // if ($producto->pro_imagen !== 'undefined') {
            //     if ($_FILES['pro_imagen']['tmp_name']) {
            //         $image = Image::make($_FILES['pro_imagen']['tmp_name'])->fit(800, 600);
            //         $producto->setImagen($nombreImg);
            //     }

            //     if ($_FILES['pro_imagen']['tmp_name']) {
            //         $image->save(CARPETA_IMAGENES . $nombreImg);
            //     }

                $resultado = $producto->actualizar();
            // } else {
            //    $resultado = $producto->editSinImg();
            // }

            echo json_encode([
                "dir" => $_POST,
                "res" => $resultado
            ]);
        }
    }

    public static function estado()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $producto = new Producto($_POST);

            if ($producto->pro_activo == "1") {

                $producto->pro_activo = "0";
                $resultado = $producto->editEstado();
                
            } else {
                $producto->pro_activo = "1";
                $resultado = $producto->editEstado();
            }

            echo json_encode([
                "pro_activo" => $producto->pro_activo,
                "resultado" => $resultado
            ]);
        }
    }

    public static function eliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            $producto = Producto::find($id);
            $resultado = $producto->eliminar();
            if ($resultado) {
                $producto->borrarImagen();
            }

            echo json_encode([
                "res" => $resultado
            ]);
        }
    }
    //ver informacion del producto más detallado
    public static function vermas()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $_SESSION['pro_vermas'] = $id; //nueva varibale session

            echo json_encode([
                "mensaje" => $id
            ]);
        }
    }
    public static function getdata(){
        $data = Producto::find($_SESSION['pro_vermas']); //cambie user por cliente, lo mismo pero con mas informacion
        echo json_encode([
            'data'=>$data
        ]);
    }

    /*
    function
    $prod = Producto::find($_SESSION['pro_vermas']); 
    $_SESSUION[lista carrito[]] = add objeto($prod)
    */
}
