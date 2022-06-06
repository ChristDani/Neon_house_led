<div class="productos page-container bg-black">
    <main class="main">
        <div class="contenedorMain container pt-1 pt-sm-5">
            <div class="row text-white d-flex justify-content-around">
                <div class="d-flex flex-column col-6 col-sm-4">
                    <h1 class="title-product py-1 py-sm-3 text-start fw-bold">PRODUCTO</h1>
                        <div class="w-100 d-flex items-center">
                            <img class="img-product w-100" src="/build/img/productos/brideToBe.webp" style="border-radius: 15px;">
                        </div>
                </div>
                <div class="contenedorTexto col-6 col-sm-4 pt-5 pt-sm-3 ">
                    <h1 class="subtitulo text-center fw-bold">NEÓN DESIGN</h2>
                        <div class="h-100 d-flex align-items-justify">
                            <aside class="">
                                <p class="parrafo">Actualmente los diseños de neon led se han vuelto una tendencia interesante y
                                diferente para cualquier evento, negocio o para la decoración de tu hogar.
                                En NEON LED STORE realizamos paneles 100% personalizados al estilo de tu marca
                                o para lo que tu evento necesita. Recuerda que puedes cotizar cualquier diseño con
                                nosotros.
                                <!--<span><a styleclass="enlaceNosotros" href="/nosotros">nosotros.</a>-->
                                </p>
                            </aside>
                        </div>
                </div>
            </div>
        </div>
    </main>

    
    <!-- INICIO DE FILTRO -->
    <!--
    <div class="container" style="display: inline">                 
        <div class="row text-white mx-1 mx-sm-5 pt-3 mb-2 d-flex">
                        
            <div class="col-lg-3">
                        
                <div class="filtros border border-light border-4 border-bottom-0 border-start-0  d-flex align-items-center fw-bold">
                    Filtros
                </div>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="cajaFiltroCategoria accordion-item border-bottom-0 border-start-0 border-4 border-light rounded-0 bg-black">
                        <h2 class="accordion-header border border-light w-100 text-white d-flex justify-content-center items-center" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed filtroCategoria float-left text-start bg-black text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Categoría
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body border" id="filtro_categoria">
                            //IMPRIME TODO LO DE CATEGORIA
                            </div>
                        </div>
                    </div>
                                                
                    <div class="cajaFiltroPrecio accordion-item border border-4 border-bottom-0 border-light border-start-0 bg-black">
                        <h2 class="accordion-header w-100 text-white d-flex justify-content-center items-center" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button border border-light collapsed filtroPrecio float-left text-start bg-black text-white fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Precio
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body border">
                                <div class="range bg-dark p-2">
                                    <div class="contenedor">
                                        <input type="range" min="100" max="900" id="Rango" class="slider">
                                            <p class="valor">Precio: <span id="value"></span></p>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <button id="optrange" name="btn_range" class="precio btn btn-secondary col-6">Filtrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>                                         
        </div>                      
    </div>
    -->

    <!--FIN de FILTRO-->
    
    <div class="container">
        <section class="row pb-3"> 

            <div class="container">
                <div class="row text-white mx-2 mx-sm-7 pt-5 mb-3 d-flex justify-content-end">              
                    <div class="col-12 col-sm-12  border neontabla"><br>
                            <h3 class= "neones" style="font-family:Roboto Condensed">GALERÍA DE PRODUCTOS</h3>
                        <div class="container">
                            
                            <div class="galproductos arreglo">
                                <div class="container" id="productoimprimir">
                                   <!--IMPRIME IMAGENES-->
                                </div>
                            </div>   

                        </div>
                    </div>
                </div>
            </div>
           
        </section>
    </div>


    <!--MODAL DE PRODUCTOS-->
    <div class="modal fade" id="modalProductos" tabindex="-1" aria-labelledby="modalAsesoria" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-25" id="padreModalLanding">
                <main class="main rounded-25 row pb-5 d-flex justify-content-center border bg-black">
                <!--Modificar para que quede como lo piden -->
                    <div class="mainConte col-8 my-3 pb-2">
                        <h1 id="pro_nombre" class="my-3 fs-2 neones p-50"> </h1>
                          <div class="row d-flex justify-content-center">
                            <img src="/build/img/landingPage/lp-hogar/dormitoriokid.webp" style="width: 300px; height:200px; ">   
                          </div>
                        <div class="row d-flex justify-content-center">

                        <form class="formMod col-12 col-sm-10 text-center" id="formproducto" >
                            <div class="modal-field">
                                <label type="text" id="pro_precio" class="font-weight-bold text-white bg-transparent text-center form-control my-3 border-0"></label>
                            </div>
                            <div class="modal-field">
                                <label type="text" id="pro_precioMulti" class="font-weight-bold text-white bg-transparent text-center form-control my-3 border-0"></label>
                            </div>
                            <span id="lblColorSeleccionado" style="color: white; font-weight: bolder;"></span>
                            <div class="modal-field">
                                <label type="text" id="pro_tamano" class="font-weight-bold text-white bg-transparent text-center form-control my-3 border-0"></label>
                            </div>
                            
                            <!-- <div class="modal-field">
                                <label type="text" id="pro_color" class="font-weight-bold text-white bg-transparent text-center form-control my-3 border-0"></label>
                            </div> -->

                            
                            <!-- <select id="selectColor" name="color" onchange="seleccionarColor();" class="neontextlanding border-0 border bg-transparent rounded w-100 me-1 me-sm-4 my-3 d-block">
                                <option id="pro_color" value="${pro_color}">${pro_color}</option>
                                <option id="proMulti" value="Multicolor">Multicolor</option>
                            </select>          -->
                            <div class="pt-3 pb-3">
                                <input type="hidden" id="id" value="formNegocio">
                                <button type="submit" onclick="window.location.href='/ProductoDetallado'" class="neonbottonlanding btn btn-primary d-block mx-auto" style="width: 40%; height:30% font-size: 20px;" id="productodet">Ver más</button>
                                
                            </div>
                       </form>
                       
                    </div>     
                    </div>

                </main>
                </div>
            </div>
          </div>
    


</div>        


<script src="build/js/ajax/ajax.filtrado.js"></script>

