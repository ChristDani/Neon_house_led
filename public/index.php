<?php

require_once __DIR__.'/../include/app.php';

use Controllers\AdminController;
use Controllers\CategoriaController;

use Controllers\CompraDetalleController;
use Controllers\ProductoController;
use Controllers\AggProducto;
use Controllers\ClienteController;
use Controllers\PrincipalController;

use Controllers\GraficosController;
use Controllers\ConfiguracionController;
use Controllers\CompraController;
use Controllers\VisitanteController;
use Controllers\RegistroClienteController;
use Controllers\ProductoDetalladoController;
use Controllers\CartController;
use Controllers\DireccionesController;
use MVC\Router;

$router = new Router();

//Zona Publica 
    $router->get('/dashboard',[AdminController::class,'dashboard']);

// Zona Privada
    $router->post('/login/verificar',[AdminController::class,'index1']);
   
//Productos
    // method get
    $router->get('/producto',[ProductoController::class,'index']);
    $router->get('/producto/getCategoria',[ProductoController::class,'obtenerCat']);
    $router->get('/producto/getProducto',[ProductoController::class,'getProducto']);
    $router->get('/producto/listar',[ProductoController::class,"listarP"]);
    $router->get('/producto/conseguirproducto',[ProductoController::class,"conseguirproducto"]);
    $router->get('/producto/getdata',[ProductoController::class,'getdata']);
    $router->get('/producto/getdataCart',[ProductoController::class,'getdataCart']);//necesario para recuperar variable de color

    // method post
    $router->post('/producto/create',[ProductoController::class,'create']);
    $router->post('/producto/update',[ProductoController::class,'update']);
    $router->post('/producto/getProForm',[ProductoController::class,'getProductoId']);
    $router->post('/producto/estado',[ProductoController::class,"estado"]);
    $router->post("/producto/eliminar",[ProductoController::class,"eliminar"]);
    $router->post("/producto/vermas",[ProductoController::class,"vermas"]); //en el frontend
    $router->post("/producto/agregarCarritoColor",[ProductoController::class,"agregarCarritoColor"]);//necesario para pasar variable de color
    
//Categoria
    // method get
    $router->get('/categoria',[CategoriaController::class, 'index']);
    $router->get('/categoria/listar',[CategoriaController::class, 'listados']);

    // method post
    $router->post('/categoria/crear',[CategoriaController::class, 'create']);
    $router->post('/categoria/estado',[CategoriaController::class,'cambiarEstado']);
    $router->post('/categoria/getCategoria',[CategoriaController::class,'getCategoria']);
    $router->post('/categoria/actualizar',[CategoriaController::class,'actualizar']);
    $router->post('/categoria/eliminar',[CategoriaController::class,'eliminar']);
  

//Cliente

    //RUTAS AUN NO PROTEGIDAS
    //method get 
    $router->get('/cliente',[ClienteController::class,'index']);
    $router->get('/cliente/listar',[ClienteController::class,'listar']); 
     //aun no implementado

    //method post
    $router->post('/cliente/getCliente',[ClienteController::class,'getCliente']);
    $router->post('/cliente/create',[ClienteController::class,'create']);
    $router->post('/cliente/estado',[ClienteController::class,'estado']); 
    $router->post('/cliente/update',[ClienteController::class,'update']); 
    $router->post('/cliente/update2',[ClienteController::class,'update2']);
    $router->post('/cliente/delete',[ClienteController::class,'delete']);
    $router->post('/cliente/createRegistro',[ClienteController::class,'createRegistro']);

//Visitantes

    //RUTAS AUN NO PROTEGIDAS
    //method get 
    $router->get('/visitante',[VisitanteController::class,'index']);
    $router->get('/visitante/listar',[VisitanteController::class,'listar']); 

     //aun no implementado

    //method post
    $router->post('/visitante/getVisitante',[VisitanteController::class,'getVisitante']);
    $router->post('/visitante/create',[VisitanteController::class,'create']);
    $router->post('/visitante/estado',[VisitanteController::class,'estado']); 
    $router->post('/visitante/update',[VisitanteController::class,'update']); 
    $router->post('/visitante/delete',[VisitanteController::class,'delete']);
    $router->post('/visitante/create2',[VisitanteController::class,'create2']); //no estar rutasprotegidas

    
//CompraDetalle

    //method get 
    $router->get('/compraDetalle',[CompraDetalleController::class,'CompraDetalle']);
    $router->get('/compraDetalle/listar',[CompraDetalleController::class,'listar']);
     //aun no implementado

    //method post
    $router->post('/compraDetalle/create',[CompraDetalleController::class,'create']);

//Compra

    //method get 
    $router->get('/compra',[CompraController::class,'Compra']);
    $router->get('/compra/listar',[CompraController::class,'listar']);
    $router->get('/compra/clienteverFactura',[CompraController::class,'clienteverFactura']);
    //POST
    $router->post('/compra/conseguirproductos',[CompraController::class,'conseguirproductos']);
    $router->post('/compra/clientefactura',[CompraController::class,'clientefactura']);
     //aun no implementado

    //method post
    $router->post('/compra/create',[CompraController::class,'create']);

//Dirrecciones
    //metodo get
    $router->get('/direcciones',[DireccionesController::class,'direcciones']);
    $router->get('/direcciones/listar',[DireccionesController::class,'listar']);
    //metodo post
    $router->post('/direcciones/getDireccion',[DireccionesController::class,'getDireccion']);
    $router->post('/direcciones/update',[DireccionesController::class,'update']);


// BotonConfiguracion
    // method get
    $router->get("/configuracion", [AdminController::class,'indexConfig']);
    $router->get("/configuracion/getData", [AdminController::class,'dataConfig']);
    $router->get("/configuracion/correoverificacion", [AdminController::class,'correoverificacion']);
    $router->get("/configuracion/verificado", [AdminController::class,'verificado']);
    
    // method post
    $router->post("/configuracion/verificar", [AdminController::class,'verificar']);
    $router->post("/configuracion/updatePassword", [AdminController::class,'updatePassword']);
    
// Cerrar Session - DASHBOARD
    //method get
    $router->get("/cerrar", [AdminController::class, 'cerrar']);

//graficos
    $router->get('/graficos',[GraficosController::class,'index']);
    
// RegistroCliente
    
    $router->get('/RegistroCliente',[RegistroClienteController::class,'regCliente']);
    
//ProductoDetallado
    
    $router->get('/ProductoDetallado',[ProductoDetalladoController::class,'proDetallado']);



// Principal
        //METHOD GET
        $router->get("/", [PrincipalController::class,'index']);
        $router->get("/nosotros",[PrincipalController::class,'nosotros']);
        $router->get("/productos",[PrincipalController::class,'productos']);
        $router->get("/contacto",[PrincipalController::class,"contacto"]);


        //formularios
        $router->get("/usuarioLogeo",[PrincipalController::class,"usuarioLogeo"]);
        $router->get("/usuarioRegistro",[PrincipalController::class,"usuarioRegistro"]);

       //METHOD POST
        $router->post("/contacto/enviar",[PrincipalController::class,"contactoEmail"]);
        $router->post("/contacto/enviarEmp",[PrincipalController::class,"contactoEmailEm"]);//correo llega a empresa
        //$router->post("/landingpage/enviar",[PrincipalController::class,"contactolandingEmail"]);

        // Cart
        $router->post("/cart/aggCart", [CartController::class, 'aggCart']); 

        //registrocliente
        //productodetallado

        //Landig Page
        $router->get("/landingPageNegocio", [PrincipalController::class, 'landingNegocio']);
        $router->get("/landingPageEvento", [PrincipalController::class, 'landingEvento']);
        $router->get("/landingPageHogar", [PrincipalController::class, 'landingHogar']);
        $router->get("/landingPageLetrero", [PrincipalController::class, 'landingLetrero']);
        $router->get("/RegistroCliente", [PrincipalController::class, 'regCliente']);
        $router->get("/ProductoDetallado", [PrincipalController::class, 'proDetallado']);
        $router->get("/administrar", [PrincipalController::class, 'administrar']);
        $router->get("/cart", [PrincipalController::class, 'cart']); 
        $router->get("/verificado", [PrincipalController::class, 'verificado']);  



    $router->comprobarRutas();