<?php

namespace MVC;

class Router {
    
    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn){
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas(){
        session_start();
        $id = $_SESSION['id'] ?? null;

        // Arreglo de rutas protegidas
        $rutas_protegidas = [
            '/dashboard',
            // producto
            '/producto','/producto/crear','/producto/editar', //'/producto/getProForm',
            '/producto/estado',"/producto/eliminar","/producto/buscarNombre",
            // categoria 
            '/categoria','/categoria/listar','/categoria/crear','/categoria/estado','/categoria/getCategoria',
            '/categoria/actualizar', '/categoria/eliminar',"/categoria/buscar",
            // cliente
            '/cliente','/cliente/listar','/cliente/getCliente','/cliente/estado','/cliente/update','/cliente/delete',
            //cliente/create

            // visitante
            '/visitante','/visitante/listar','/visitante/getVisitante','/visitante/create',
            '/visitante/estado','/visitante/update','/visitante/delete', //'/visitante/create2', 
            // compraDetalle
            '/compraDetalle','/compraDetalle/listar','/compraDetalle/create',
            // compra
            '/compra','/compra/listar','/compra/conseguirproductos','/compra/create',
            // configuracion
            '/configuracion', '/configuracion/getData','/configuracion/verificar','/configuracion/updatePassword',
            // otros
            '/graficos',
            '/cerrar',
            // administrar
            '/administrar',
        ];

        $urlActual = $_SERVER['PATH_INFO'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];

        if($metodo === 'GET'){
            $fn = $this->rutasGET[$urlActual] ?? null;
        }else{
            $fn = $this->rutasPOST[$urlActual] ?? null;
        } 

        //Proteger las rutas
        if(in_array($urlActual,$rutas_protegidas) && !$id){
            header("location: /");
        } else if (!empty($_SESSION['id']) && $urlActual == '/home'){
            header("location: /dashboard");
        }

        if($fn){
            call_user_func($fn, $this);
        }else {
            echo 'Pagina no encontrada';
        }
    }

    //Muestra una vista
    public function render($view, $datos=[]){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();//Almacenamiento en memoria durante un momento...
        include __DIR__."/views/$view.php";

        $contenido = ob_get_clean(); //Limpia elbuffer

        include __DIR__."/views/layout.php";
        
    }

    //Muestra el login
    public function renderLogin($view, $datos=[]){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();//Almacenamiento en memoria durante un momento...
        include __DIR__."/views/$view.php";

        $contenido = ob_get_clean(); //Limpia elbuffer

        include __DIR__."/views/loginlayout.php";   //no esta siendo usado y no sabemos que hace
    }

    public function renderPrincipal($view, $datos=[]){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start();//Almacenamiento en memoria durante un momento...
        include __DIR__."/views/principal/$view.php";

        $contenido = ob_get_clean(); //Limpia elbuffer

        include __DIR__."/views/layoutPrincipal.php";
        
    }
}
