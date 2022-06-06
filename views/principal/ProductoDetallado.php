

<div class="bg-black container-fluid">

    <div class="container d-flex justify-content-center">
        <div class="text-center position-relative" style="width: 90%;">
            <div class="d-flex justify-content-center items-center w-100">
                <h2 style="z-index: 10;" class="bg-black text-white p-5 pt-2 pb-2">MÁS DETALLES</h2>
            </div>
            <div class="w-100 position-absolute rounded-medium" id="services-led" style="z-index:5;top:40%;height: 10px;">
            </div>
        </div>

    </div>


<div class="container pt-3 pb-5">
<div class="row text-white mx-1 mx-sm-5 pt-3 mb-2 d-flex justify-content-end">

    <!--Carrucel-->
    <div id="services-gallery" class="col-lg-5  justify-content-center">
              
        <div id="carouselExampleIndicators" class="carousel slide tamano-carrus" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/build/img/landingPage/lp-hogar/h1.jpg" class="d-block w-100" id="imgCarrusHogar1" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/build/img/landingPage/lp-hogar/h2.jpg" class="d-block w-100" id="imgCarrusHogar2" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/build/img/landingPage/lp-hogar/h3.jpg" class="d-block w-100" id="imgCarrusHogar3" alt="...">
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

    </div>
    <!--Fin Carrucel-->
         

    <!-- Form para comprar -->
    <div class="col-lg-7 border neontabla">
        <div class="container">
            <div class="formularior row text-white mx-1 mx-sm-5 pt-3 mb-2 d-flex justify-content-end">
                              
                <h1 id="nombre" class="text-white text-center"></h1>                   
                    <form class="formMod col-12 col-sm-12">
                        <input type="hidden" id="id" value="formNegocio">

                            <div style="float: left;"class="modal-field">
                                <label id="precio" type="text" class="font-weight-bold text-white bg-transparent text-left form-control border-0"></label>
                                <!-- <div class="modal-field">
                                    <label type="text" id="pro_precio" class="font-weight-bold text-white bg-transparent text-center form-control my-3 border-0"></label>
                                </div>                       -->
                                <label id="tamano" type="text" id="pro_tamano" class="font-weight-bold text-white bg-transparent text-left form-control border-0"></label>
                                <!-- <label id="color" type="text" id="pro_color" class="font-weight-bold text-white bg-transparent text-left form-control border-0"></label> -->
                                <select id="selectColor" name="color" onchange="seleccionarColor2();" class="neontextlanding border-0 border bg-transparent rounded w-100 me-1 me-sm-4 my-3 d-block">
                                    <option id="proColor" value="Otro"></option>
                                    <option id="proMulti" value="Multicolor">Multicolor</option>
                                </select>
                             
                            </div>
                                
                            <br>
                                
                                
                                <div class="pt-3 pb-3">
                                <i class="fa-solid fa-dolly"></i><a onclick="agregarCarritoColor(); window.location.href='/cart'" class="neonbottonlanding btn btn-primary my-sm-3 border-0" style="width: auto; height:auto font-size: 18px;" id="productodet1"> Agregar al carrito </a>
                                </div>
                            </form>

                    <hr>
                    <h4 id="detalles"></h4>

                    <h3 style="color: #fff45e">¡Calidad Garantizada!</h3>                     
                        <label>Contamos con certificacion de calidad, productos peruanos: </label>
                    <div class="pt-3 pb-1">                       
                        <img src="/build/img/SellosCalidad/selloISO.webp" width="80px">&nbsp;
                        <img src="/build/img/SellosCalidad/logoPeru.webp" width="80px">
                        <img src="/build/img/SellosCalidad/selloISO.webp" width="80px">
                    </div>
                    <div class="pt-1 pb-1">                       
                        <i class="fa-solid fa-angles-left"></i><a href="/productos" class="neonbottonlanding btn btn-primary my-sm-3 border-0" style="width: auto; height:auto font-size: 18px;"> Volver </a>
                    </div>
                                  
            </div>
                               
        </div>
    </div>
   
        
    
</div>    
</div>

     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="build/js/ajax/ajax.findproducto.js"></script>
    <script src="build/js/ajax/ajax.cart.js"></script>
</div>