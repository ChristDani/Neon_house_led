<?php

namespace Controllers;

use Model\Producto;
use MVC\Router;

class CartController 
{
    public static function aggCart()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            $data = Producto::find($_SESSION['pro_vermas']);
            $color= $_POST['pro_color'];
            if ($color == 'MULTICOLOR') 
            {
                $precio_factura=$data['pro_precioMulti'];
            }
            else
            {
                $precio_factura=$data->$pro_precio;
            }
            $data2=append($data['id']);
            $data2=append($data['pro_nombre']);
            $data2=append($precio_factura);
            $data2=append($color);
            $_SESSION['listcart'][] = $data2;

            echo json_encode([ "mensaje" => $data ]);
        }
    }
    public static function getdatacart()
    {
        $data = $_SESSION['listcart']; //envia todos los datos del Sesion
        echo json_encode([ 'data'=>$data ]);
    }
    //estamos poniendo el session en una lista puede que ingrese los datos normales o que empiece a anidar listas
}
