<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Neon Led Store</title>

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    

    <!-- FontAwesome -->

    <!--<link rel="stylesheet" href="build/css/fontawesome/css/all.min.css">-->
    <script src="https://kit.fontawesome.com/f788fcfb82.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 CSS -->

    <link rel="stylesheet" href="build/css/bootstrap/bootstrap.min.css">

    <!-- Normalize CSS -->

    <link rel="stylesheet" href="build/css/normalize/normalize.css">

    <link rel="stylesheet" href="build/css/index.css">

    <script src="build/js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    

    <!-- Data Tables -->
    <script src="build/js/plugins/DataTable/jquery.dataTables.min.js"></script> <!--no obligatorio-->
    <script src="build/js/plugins/DataTable/dataTables.bootstrap.min.js"></script> <!--no obligatorio-->
    <script src="build/js/plugins/bootstrap-select/bootstrap-select.js"></script>  <!--no obligatorio-->
    <script src="build/js/plugins/jquery-datatable/jquery.dataTables.js"></script>  <!--no obligatorio-->
    <script src="build/js/plugins/jquery-datatable/skin/bootstrap/dataTables.bootstrap.js"></script> <!--no obligatorio-->
     


    <!-- CSS -->

    <link rel="stylesheet" href="build/css/principal/navs.css">

    <link rel="stylesheet" href="build/css/grid.css">

    <link rel="stylesheet" href="build/css/neon.css">

    <link rel="stylesheet" href="build/css/arreglo.css">
    
    <link rel="stylesheet" href="build/css/estilos.css">

    <!-- Modal Consulta Enviada(Correo) -->
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="build/js/sweetalert.min.js"></script>


</head>

<body>

    <header class="bg-black">

        <div class="container container-responsive">

            <nav class="contenido navbar navbar-expand-lg navbar-light bg-black">

                <div class="container-fluid">

                    <a class="navbar-brand" href="/"><img class="w-100" src="/build/img/logo.webp" alt="logo neon led store" width="55px" height="55px"></a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="listaContenido nav-item px-2 border-end border-2 border-light">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/">

                                    <div class="botones text-white px-3 rounded-medium">HOME</div>

                                </a>

                            </li>

                            <li class="listaContenido nav-item px-2 border-end border-2 border-light">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/productos">

                                    <div class="botones text-white px-3 rounded-medium">PRODUCTOS</div>

                                </a>

                            </li>

                            <li class="listaContenido nav-item px-2 border-end border-2 border-light">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/nosotros">

                                    <div class="botones text-white px-3 rounded-medium">NOSOTROS</div>

                                </a>

                            </li>

                            <li class="listaContenido nav-item px-2  border-2 border-light">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/contacto">

                                    <div class="botones text-white px-3 rounded-medium">PREGUNTAS</div>

                                </a>

                            </li>
                            <li>
                            <a class="enlace nav-link px-0 py-0">

                                <div class="botones text-white px-3 rounded-medium"></div>

                            </a>
                            </li>
                            <li class="listaContenido px-2 border-2 border-light border-end " id='Carrito' style=" display: none;" >

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/cart">

                                    <div class="botones text-white px-3 rounded-medium">CARRITO
                                    <i class="fas fa-shopping-cart"></i>
                                    </div>

                                </a>

                            </li>
                            <li class="listaContenido px-2 border-2 border-light border-end " id='Perfil' style=" display: none;">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/dashboard">

                                    <div class="botones text-white px-3 rounded-medium">ADMIN
                                    <i class="fas fa-user"></i>
                                    </div>

                                </a>

                            </li>
                            <li class="listaContenido px-2 border-2 border-light border-end " id='Iniciar_S' style="display: none;">
                            <div class="dropdown show">
                                <a class="enlace nav-link px-0 py-0 dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">

                                    <div class="botones text-white px-3 rounded-medium">INCIAR SESION
                                    <i class="fas fa-sign-in-alt"></i>
                                    </div>

                                </a>
                                <div class="dropdown-menu bg-black container rounded-25 row pb-5 justify-content-center border border-secondary" aria-labelledby="dropdownMenuLink" style="width: 250px !important;">
                                <div style="display: flex; align-items: center; justify-content: center; " >
                                    <form id="formLogin" method="POST" class="formulario">
                                        <div class="campo" style="padding: 10px; margin-top: 10px;">
                                            <i class="far fa-envelope input-email text-white my-3 fs-2 neones p-50"></i>
                                            <input class="form-control-sm p-1 input-contact bg-transparent rounded text-white border" type="text" id="cli_email" placeholder="Correo" required>
                                            <i class="fas fa-key input-password text-white my-3 fs-2 neones p-50"></i>
                                            <input class="form-control-sm p-1 input-contact bg-transparent rounded text-white border" type="password" id="cli_clave" placeholder="Contraseña" required>
                                        </div>
                                        
                                        <button type="submit" style="margin-left: 40px;" class="btn btn-opacity my-sm-3 border-0 text-white">
                                            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                                        </button>
                                        <div class="enlaces text-white">
                                        <a href="#" class="text-white"><span>¿Olvidaste tu contraseña?</span></a>
                                        <br>
                                        <a href="/usuarioRegistro" class="text-white"><span>¿No tienes usuario?</span></a>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </li>
                            <li class="listaContenido px-2 border-2 border-light border-end " id='Administrar' style="display: none;">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/administrar">

                                    <div id='Nombre' class="botones text-white px-3 rounded-medium">
                                    </div>

                                </a>

                            </li>
                            <li class="listaContenido px-2 border-2 border-light" id='Cerrar_S' style="display: none;">

                                <a class="enlace nav-link px-0 py-0" aria-current="page" href="/cerrar">

                                    <div id='Nombre' class="botones text-white px-3 rounded-medium">CERRAR SESION
                                    <i class="fas fa-sign-out-alt"></i>
                                    </div>

                                </a>

                            </li>

                        </ul>

                    </div>

                    <div class="d-flex position-absolute" style="top: 1em; right:1em">

                        <div class="navbar-brand iconoUsuario container ">

                            <?php //if ($this->sessionValidate == true) : 

                                    ?>

                        <div class="d-flex items-center gap-1 row">
                            
                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                            <div  id="Carrito" class="col"  style=" display: none;">    
                                    <button style="padding-top: 8px !important" class="btn btn-primary border-0 bg-transparent" onclick="window.location.href='/cart'">Carrito    
                                        <i class="fas fa-shopping-cart"></i>
                                    </button>
                            </div>
                            <div  id="Perfil" class="col" style=" display: none;">
                                    <button style="padding-top: 8px !important" class="btn btn-primary border-0 bg-transparent" onclick="window.location.href='/login'">Admin    
                                        <i class="fas fa-user"></i>
                                    </button>
                            </div>
                            <div  id="Iniciar_S" class="col" style=" display: none; padding-top: 0px !important;">   
                                    <button style="padding-top: 8px !important;" class="btn btn-primary border-0 bg-transparent" onclick="window.location.href='/login'">Iniciar Sesion    
                                        <i class="fas fa-sign-in-alt"></i>
                                    </button>
                            </div>
                            <div  id="Administrar" class="col" style=" display: none;">    
                                    <button style="padding-top: 8px !important" id="Nombre" class="btn btn-primary border-0 bg-transparent" onclick="window.location.href='/administrar'">
                                    </button>
                            </div>
                            <div id="Cerrar_S"  class="col" style=" display: none;">
                                    <button style="padding-top: 8px !important" class="btn btn-primary border-0 bg-transparent" onclick="window.location.href='/cerrar'">Cerrar Sesion   
                                        <i class="fas fa-sign-out-alt"></i>
                                    </button>
                            </div> 
                        </ul> -->
                        </div>

                            <?php //else : 

                            ?>

                                <a href="" class="text-white" data-bs-toggle="modal" data-bs-target="#modalLogin">

                                    <i class="fas fa- fa-2x"></i>

                                </a>

                            <?php //endif; 

                            ?> 

                        </div>

                        <button class="amburguesa navbar-toggler " data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                            <span class="amburguesaContenido navbar-toggler-icon bg-black border-transparent"></span>

                        </button>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    <?php echo $contenido ?>

    <footer class="border-top bg-black border-light border-2 ">

        <div class="contenido container text-white px-3 px-sm-5 py-3 py-sm-4">

            <div class="row">

                <h2 class="subtitulo display-7">Tu diseño, tu espacio</h2>

            </div>

            <div class="row">

                <div class="col-12 order-1 order-sm-1 col-sm-4 pt-3">

                    <p class="parrafoFooter">Somos fabricantes e importamos articulos neon led, pantallas led y paneles

                        electronicos. Producto hecho en Perú. </p>

                </div>

                <div class="col-12 order-3 order-sm-2 col-sm-5 pt-3">

                    <a href="http://maps.google.com/?q=jr. Paruro 1401 tda. 130 sótano, CC shopping center, Cercado de Lima 15001" target="_blank" class="parrafoFooter text-white"><i class="fas fa-map-marker-alt"></i>Jr. Paruro 1401 tda 130 CC Shoping Center Paruro, Cercado de Lima</a>

                    <p class="parrafoFooter text-white"><i class="fas fa-mobile-alt"></i>994 078 320</p>

                    <a id="a-email" href="info.neonledstore@gmail.com" class="parrafoFooter text-white"><i class="fas fa-envelope bg-black"></i>info.neonledstore@gmail.com</a>

                    <a class="reset-href" href="https://api.whatsapp.com/send?phone=51994078320" target="_blank">

                        <div class="wspBox d-block d-sm-none rounded-circle p-0 m-0" style="z-index: 2500;">

                            <i class="fab fa-whatsapp fa-3x"></i>

                        </div>

                    </a>

                </div>

                <div class="redesSociales order-2 order-sm-3 col-12 col-sm-3 pt-3">

                    <ul class="lista" style="position: relative;z-index: 2500;">

                        <a class="reset-href" href="https://api.whatsapp.com/send?phone=51994078320" target="_blank">

                            <li class="redSocialWhatsapp d-inline me-1"><i class="fab fa-whatsapp fa-2x bg-black"></i></li>

                        </a>

                        <a class="reset-href" href="https://www.facebook.com/Neon-Led-store-100244098454782" target="_blank">

                            <li class="redSocial d-inline me-1"><i class="fab fa-facebook fa-2x bg-black"></i></li>

                        </a>

                        <a class="reset-href" href="https://vm.tiktok.com/ZMLPybCRx/" target="_blank">

                        <li class="redSocial d-inline me-1"><i class="fab fa-tiktok fa-2x"></i></li>

                        </a>

                        <a class="reset-href" href="https://www.instagram.com/nhldecoracioncomercial/?utm_medium=copy_link" target="_blank">

                            <li class="redSocial d-inline me-1"><i class="fab fa-instagram fa-2x bg-black"></i></li>

                        </a>

                        <a class="reset-href" href="https://www.pinterest.com/infoneonledstore/" target="_blank">

                            <li class="redSocial d-inline me-1"><i class="fab fa-pinterest-square fa-2x"></i></li>

                        </a>

                    </ul>

                </div>

            </div>

    </footer>

    <script src="https://kit.fontawesome.com/54e80e802d.js" crossorigin="anonymous"></script>

    <script defer type="text/javascript" src="/build/js/app.js"></script> 

    <!-- <script defer src="/src/js/login.js"></script> -->

    <script src="build/js/plugins/bootstrap/bootstrap.min.js"></script>


</body>

</html>
<script src="build/js/ajax/ajax.layout.js"></script>
<script src="build/js/ajax/ajaxlogin.js"></script>