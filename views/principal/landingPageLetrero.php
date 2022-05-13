<div class="landingPage bg-black">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!--INICIA CARRUSEL lAYOUTpRINCIPAL.php, AGREGAR LOS SCRIPT NECESARIO PARA QUE FUNCIONES, SI SUBES UN NUEVO SCRIPT, PUBLIC/BUILD/JS 
    https://www.youtube.com/watch?v=N7JXmnaVWL0&t=269s-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/build/img/landingPage/lp-letrero/l1.webp" class="d-block w-100" id="imgCarrusLetrero1" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/build/img/landingPage/lp-letrero/l2.webp" class="d-block w-100" id="imgCarrusLetrero2" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/build/img/landingPage/lp-letrero/l3.webp" class="d-block w-100" id="imgCarrusLetrero3" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
  <!--FINAL DEL CARRUSEL-->


    <!--CENTRADO Y BLANCO-->
    <div class="container-fluid text-white text-center">
        <!--BOTON DEL MODAL-->
        <button type="button" id="model-register" class="neonbottonlanding btn btn-primary my-0 my-sm-3 border-0" data-bs-toggle="modal" data-bs-target="#modalAsesoria" onclick="AsesoriaLet()">
            Obtén una asesoría personalizada GRATIS!
        </button>

        <!--Inicio Modal-->
            <div class="modal fade" id="modalAsesoria" tabindex="-1" aria-labelledby="modalAsesoria" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content rounded-25" id="padreModalLanding">
                <main class="main rounded-25 row pb-5 d-flex justify-content-center">
                
                    <div class="mainContent neontabla col-8 my-5 pb-3">
                    <h3 class="my-3 fs-2 neones p-50">¿Quieres tener un Letrero visualmente atractivo?</h3>
                    <div class="row d-flex justify-content-center">
                            <!-- FORM INHABILITADO PARA HACER PRUEBAS CON EL BOTON SUBMIT, POSTERIORMENTE REMOVER ONSUBMIT-->

                        <form class="formContact landingPageForm col-12 col-sm-10" id="formContact" method="POST">
                            <input type="hidden" id="consulta" value="formLetrero">
                            <div class="modal-field">
                                <input type="hidden" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="contador" id="contador" value=1>
                            </div>
                            <div class="modal-field">
                                <input type="text" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="nombre" id="nombre" placeholder="Nombres" required>
                            </div>
                            <div class="modal-field">
                                <input type="text" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="apellido" id="apellidos" placeholder="Apellidos" required>
                            </div>
                            <div class="modal-field">
                                <input type="email" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="correo" id="correo" placeholder="Correo Electrónico" required>
                            </div>
                            <div class="modal-field">
                                <input type="number" class="neontextlanding bg-transparent text-center form-control my-3 border-0 mb-3" name="telefono" id="telefono" placeholder="Número de celular" required>
                            </div> <!--crea tu propio boton, lo agregas en NEON.css -->
                            <div class="modal-field">
                                <input type="hidden" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="pregunta" id="pregunta" value="Solicita Asesoría">
                            </div>
                            <button type="submit" class="neonbottonlanding btn btn-primary my-sm-3 border-0" id="btn-modal-asesoria" onclick="Letrero()">Pedir asesoria</button>
                        </form>
                    </div>     
                    </div>
                </main>
                </div>
            </div>
            </div>
            <!--Final Modal-->

            <div class="row questionNosotros py-2 py-sm-1 d-flex justify-content-center">
                <h2 class="questionNosotrosTitle pt-2 pt-sm-1">¿Por qué trabajar con nosotros?</h2>
                <p class="paragraph mt-3 w-75  px-4 px-sm-5 border border-5 rounded-3">"Entendemos la importancia de la decoración en tus letreros, para ello te ofreceremos el ambiente que tú 
                    mereces, con nostros podrás lograrlo"</p>      
            </div>


            <!-- Modal Ver Catalogo -->

            <button type="button" id="model-Catalogo" class="neonbottonlanding btn btn-primary my-0 my-sm-3 border-0" data-bs-toggle="modal" data-bs-target="#modalCatalogo" style="width: 30%;">
                Ver Catálogo
            </button>


                <div class="modal fade" id="modalCatalogo" tabindex="-1" aria-labelledby="modalCatalogo" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modCatalogo">

                            <div class="modal-header text-center">
                                <h3 class="modal-title neones tex-center">"No te pierdas los Diseños Exclusivos"</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <form class="formContact1 landingPageForm col-sm-12" id="formContact1" method="POST">
                                <div class="modal-body mx-5">
                                    <input type="hidden" id="mod_consulta" value="formHogar">
                                    <div class="modal-field">
                                        <input type="hidden" class="form-control my-3 border-2" name="contador" id="mod_contador" value=1>
                                    </div>
                                    <div class="modal-field">
                                        <input type="text" class="form-control my-3 border-2" name="nombre" id="mod_nombre" placeholder="Nombres" required>
                                    </div>
                                    <div class="modal-field">
                                        <input type="text" class="form-control my-3 border-2" name="apellido" id="mod_apellidos" placeholder="Apellidos" required>
                                    </div>
                                    <div class="modal-field">
                                        <input type="email" class="form-control my-3 border-2" name="correo" id="mod_correo" placeholder="Correo Electrónico" required>
                                    </div>
                                    <div class="modal-field">
                                        <input type="number" class="form-control my-3 border-1" name="telefono" id="mod_telefono" placeholder="Número de celular" required>
                                    </div>
                                    <div class="modal-field">
                                        <input type="hidden" class="form-control my-3" name="pregunta" id="mod_pregunta" value="Interesado en luces Hogar">
                                    </div>
                                    
                                    <button type="submit" class="neonbottonlanding btn btn-primary" onclick="verCatalogoL();">Enviar y Mostrar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            
            <!-- Fin Modal Ver Catalgo -->


            
            <!--LandingPageHogar-->
            <div class="landin1 arreglo" id="Catalogo">

                <h1 class="title">¡LOS MEJORES DISEÑOS PARA TU HOGAR!</h1>

                    <div class="container">

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Frase.jpg">
                                <h4>Frase</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Among.jpg">
                                <h4>Among</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Labios.jpg">
                                <h4>Labios</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/LaCueva.jpeg">
                                <h4>La cueva</h4>
                        </div>
        
                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Nombre.jpg">
                                <h4>Nombre</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Open.jpg">
                                <h4>Open</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Rayo.jpg">
                                <h4>Rayo</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/TelefonoPared.jpg">
                                <h4>Telefono</h4>
                        </div>

                        <div class="card">
                            <img src="build/img/landingPage/lp-letrero/Vintage.jpg">
                                <h4>Vintage</h4>
                        </div>

                    </div>
            </div>   

            <!--Fin LandinPageHogar-->


        <div class="personalizado row d-flex align-items-end ">
            <div class="col-12 col-sm-4 my-3 my-sm-5">
                <img class="personalizadoImage mx-auto d-block" src="/build/img/nightJazz.webp" alt="logo" loading="lazy">
                <p class="personalizadoParagraph border border-5 rounded-3 text-center m-3 p-3 lh-sm">Ofrecemos diseños personalizados a pedido del cliente</p>
            </div>
            <div class="col-12 col-sm-4 my-3 my-sm-5">
                <img class="personalizadoImage mx-auto d-block" src="/build/img/delivery.webp" alt="logo" loading="lazy">
                <p class="deliveryParagraph border border-5 rounded-3 text-center m-3 py-3 px-5 lh-sm">Delivery gratis a todos los distritos de Lima y Provincia</p>
            </div>
            <div class="col-12 col-sm-4 my-3 my-sm-5">
                <div class="row">
                    <img class="personalizadoImage precio mx-auto d-block" src="/build/img/precio.webp" alt="logo" loading="lazy">   
                </div>
                <p class="fabricantesParagraph border border-5 rounded-3 text-center m-3 p-3 lh-sm">Somos fabricantes y ofrecemos los productos a un excelente precio</p>
            </div>
        </div>
        <div class="row empresasQue py-2 py-sm-5">
            <h2 class="empresasQueTitle mb-2 mb-sm-5">Empresas que trabajan con nosotros: </h2>
            <div class="col-3 d-none d-sm-block">
                <img class="empresasQueImage mx-auto d-block" src="/build/img/metacolor.webp" alt="logo" loading="lazy">
            </div>
            <div class="col-3 d-none d-sm-block">
                <img class="empresasQueImage mx-auto d-block" src="/build/img/digimedia.webp" alt="logo" loading="lazy">
            </div>
            <div class="col-3 d-none d-sm-block">
                <img class="empresasQueImage mx-auto d-block" src="/build/img/nocheDePatas.webp" alt="logo" loading="lazy">
            </div>
            <div class="col-3 d-none d-sm-block">
                <img class="empresasQueImage mx-auto d-block" src="/build/img/aje.webp" alt="logo" loading="lazy">
            </div>
            <div id="carouselExampleControls2" class="carousel slide col-12 my-3 d-block d-sm-none" data-bs-ride="carousel">
                <div class="carousel-inner row m-0">
                    <div class="carousel-item col-6 col-sm-12 active " data-bs-interval="2000">
                        <img class="empresasQueImage mx-auto d-block" src="/build/img/metacolor.webp" alt="logo" loading="lazy">
                    </div>
                    <div class="carousel-item col-6 col-sm-12" data-bs-interval="2000">
                        <img class="empresasQueImage mx-auto d-block" src="/build/img/digimedia.webp" alt="logo" loading="lazy">
                    </div>
                    <div class="carousel-item col-6 col-sm-12" data-bs-interval="2000">
                        <img class="empresasQueImage mx-auto d-block" src="/build/img/nocheDePatas.webp" alt="logo" loading="lazy">
                    </div>
                    <div class="carousel-item col-6 col-sm-12" data-bs-interval="2000">
                        <img class="empresasQueImage mx-auto d-block" src="/build/img/aje.webp" alt="logo" loading="lazy">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="\build\js\ajax\ajaxconfi-carucel.js"></script>

<script src="build/js/ajax/ajax.contacto.js"></script>