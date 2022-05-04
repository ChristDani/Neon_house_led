<div class="contacto bg-black container-fluid">
    <div class="container">
        <section class="row pb-5">
            <form id="formRegistro" enctype="multipart/form-data">
                <div class="container">
                    <div class="row text-white mx-1 mx-sm-5 pt-3 mb-2 d-flex justify-content-end">
                        <div class="formulario ol-lg-5 p-5 border neontabla cyan">
                            <h2 class="neones purpura" style="padding-bottom: 10px;">Registrese</h2>   
                            <div class="row"> 
                                <div class="form-group col-md-6">
                                <label class="control-label" for="nombre">Nombres</label>
                                <input class="form-control p-2 input-contact bg-transparent rounded w-100 me-1 me-sm-4 my-3 text-white" minlenght="4" type="text" name="nombre" id="nombre" placeholder="Nombres" >
                                </div>
                                <div class="form-group col-md-6">
                                <label class="control-label" >Apellidos</label>
                                <input class="form-control p-2 input-contact bg-transparent rounded w-100 me-1 me-sm-4 my-3 text-white" minlenght="4" type="text" name="apellidos" id="apellidos" placeholder="Apellidos" >
                                </div>    
                                <div class="form-group col-md-6">
                                <label class="control-label" >Contraseña</label>
                                <input class="form-control p-2 input-contact bg-transparent rounded w-100 me-1 me-sm-4 my-3 text-white" minlenght="4" type="password" name="clave" id="clave" placeholder="Contraseña" >
                                </div>
                                <div class="form-group col-md-6">
                                <label class="control-label" >Correo Electronico</label>
                                <input class="form-control p-2 input-contact bg-transparent rounded w-100 me-1 me-sm-4 my-3 text-white" type="email" name="email" id="email" placeholder="Correo" >
                                </div>
                                <div class="form-group col-md-6">
                                <label class="control-label" >Telefono</label>
                                <input class="form-control p-2 input-contact bg-transparent rounded w-100 me-1 me-sm-4 my-3 text-white"  minlenght="9" maxlenght="9" type="number" name="telefono" id="telefono" placeholder="Telefono" >
                                </div>
                                <div class="input-group">
                                <button type="submit" class="neonbottonlanding btn btn-primary my-sm-3 border-0" style="width: 90%; height:30% font-size: 18px;">Guardar</button>
                                <span class="input-group-addon"></span>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

<script src="build/js/ajax/ajax.registroCliente.js"></script>
