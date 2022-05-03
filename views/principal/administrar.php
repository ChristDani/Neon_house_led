<!-- <section class="bg-black pt-5 pb-5 text-white"> -->
<div class="pt-5 page-container bg-black text-white">
        
            <h3 class="text-white display-1 weight-medium mx-3 mainTitulo"> HISTORIAL </h3>
        
                    <!--CONTENIDO-->       
            
                    <div class="recipient">
                        <nav id="main-nav" class="navBtns">
                 
                            <div class="sobre-admin">
                                <h3 class="text-white">Sobre el Cliente: </h3>
                            </div>
                            <div id="toggle-menu" class="toggle-menu">
                                <i class="fa-solid fa-circle-chevron-down toggle-menu_icons"></i>
                            </div>
                            <ul id="main-Admin" class="main-Admin">
                                <!-- <a href="#"><li class="listaAdmin"><i class="icon_izq_admin fa-solid fa-user-gear"></i>  Sobre el Cliente</li></a> -->
                                <li class="listaAdmin">
                                    <a href="#" class="main-menu_link" onclick="cambioHistorial()"><i class="fa-solid fa-boxes-stacked main-menu_icon"></i>Historial de Factura</a>
                                </li>
                                <li class="listaAdmin">
                                    <a href="#" class="main-menu_link" onclick="cambioDatosPersonales()"><i class="fa-regular fa-circle-user main-menu_icon"></i>Administrar Datos</a>
                                </li>
                                <li class="listaAdmin">
                                    <a href="#" class="main-menu_link" onclick="cambioContrasena()"><i class="fa-solid fa-lock main-menu_icon"></i>Cambiar Contraseña</a>
                                </li>
                                <li class="listaAdmin">
                                    <a href="#" class="main-menu_link" onclick="verificacionCorreo()"><i class="fas fa-user-check main-menu_icon"></i>Activar cuenta</a>
                                </li>
                            </ul>                         

                        </nav>


                        <div class="mostrar-res" id="es">
                            <!-- primer registro -->
                            <div class="row espacio-admin" id="cambioFontHistorial">
                                <!-- principal registro  -->
                                <div class="col mx-1  pt-3 mb-1 border neontabla">
                                    <div class="pt-3 col-sm-12">
                                        <table class="table table-purple table-striped table-hover  w-100 table-light table-fixed" id="clientecompraver">
                                        <!--PARA PONER CON BLANCO: table table-striped table-hover table-light table-fixed w-100-->    
                                            <thead class="tableAdm">
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Precio total</th>
                                                    <th>Ver detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                    </div>                                   
                                    <hr style="width: 95%">
                           
                                <!--fin de principal registro -->
                                    <div class="col-sm-12">
                                        <table class="table table-purple table-striped table-hover w-100 table-light table-fixed" id="CompraDetalle" role="grid" aria-describedby="CompraDetalle_info" style="width: 822px;">
                                            <!--PARA PONER CON BLANCO: table table-striped table-hover table-light table-fixed w-100-->    
                                            <thead class="tableAdm">
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="CompraDetalle" rowspan="1" colspan="1" aria-label="Producto ID: activate to sort column ascending">Producto ID</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="CompraDetalle" rowspan="1" colspan="1" aria-label="Precio Compra: activate to sort column descending" aria-sort="ascending">Precio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="CompraDetalle" rowspan="1" colspan="1" aria-label="Cantidad: activate to sort column ascending">Cantidad</th>
                                                    <th class="sorting" tabindex="0" aria-controls="CompraDetalle" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending">Total</th>
                                                    <th class="sorting" tabindex="0" aria-controls="CompraDetalle" rowspan="1" colspan="1" aria-label="Detalle Color: activate to sort column ascending">Detalle color </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                            </div>
                        
                         <!--Datos Personales-->     
                            <div class="container">
                                <div class="fondo-null espacio-admin" id="cambioDatosUsuarios">                                        
                                    <div class="col mx-1  pt-3 mb-1 border neontabla">
                                            <h2 class= "neones">  <i class="fa-solid fa-user-pen"></i> Datos Personales </h2>
                                                <div class="pt-3 col-sm-12">

                                                    <form class="formDatos" id="formDatos" method="POST">                                                                    
                                                        <input class="p-2 neontextlanding  border-0 border bg-transparent rounded w-100 me-1 me-sm-4 my-3 d-block text-white" type="hidden" id="per_id"><!--variable invisible-->
                                                        <label for="nombre" style="color: white;">Nombre: </label>          
                                                        <input class="p-2 neontextlanding bg-transparent border-0 border  rounded w-100 me-1 me-sm-4 my-3 d-block text-white" type="text" id="per_nombre"><br>
                                                        <label for="nombre" style="color: white;">Apellidos: </label>  
                                                        <input class="p-2 neontextlanding bg-transparent border-0 border  rounded w-100 me-1 me-sm-4 my-3 d-block text-white" type="text" id="per_apellidos"><br>
                                                        <label for="nombre" style="color: white;">Correo: </label>
                                                        <input class="p-2 neontextlanding bg-transparent border-0 border  rounded w-100 me-1 me-sm-4 my-3 d-block text-white" type="email" id="per_email"><br>
                                                        <label for="nombre" style="color: white;">Teléfono: </label>  
                                                        <input class="p-2 neontextlanding bg-transparent border-0 border  rounded w-100 me-1 me-sm-4 my-3 d-block text-white" type="number" id="per_telefono"> <br>

                                                        <div class="espacio-AA">
                                                            <button type="submit" class="neonbottonlanding btn btn-primary" style="width: auto; height: auto; font-size: 14px;" id="save2">Guardar</button> 
                                                                    
                                                        </div>                                                       
                                                    </form>  
                                                </div>
                                                
                                    </div>                               
                                </div>
                            </div>


                            <!--Form cambio Contraseña-->
                            <div class="container">
                                <section class="fondo-null espacio-admin" id="cambioFontContra">
                                        <div class="container">
                                            <div class="col mx-1  pt-3 mb-1 border neontabla">
                                                    <h2 class= "neones"><i class="fa-solid fa-key"></i> Cambio Cantraseña </h2>
                                                        <div class="container">
                                                        <div class="row">
                                                            <div class=" my-auto mx-auto">          
                                                                
                                                            <form id="formcontra">
                                                                <div class="form-group">
                                                                    <label style="color: white;">Contraseña actual: </label>
                                                                    <input class="p-2 neontextlanding bg-transparent border-0 border  rounded w-100 me-1 me-sm-4 my-3" style="font-style: italic;" placeholder="Ingresa tu contraseña actual" type="password" id="pass" required>
                                                                </div>

                                                                <div id="respcontra" class="m-1 d-none">

                                                                    <label style="color: white;">Nueva contraseña:</label>
                                                                    <input class="form-control input-lg" placeholder="Ingresa la nueva contraseña" style="font-style: italic;" type="password" id="passnew1" required>
                                                                    <label style="color: white;">Repetir nueva contraseña:</label>
                                                                    <input class="form-control input-lg" placeholder="Repita la nueva contraseña" style="font-style: italic;" type="password"  id="passnew2" required>

                                                                    <div id="mensaje"></div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" id="btncerrar">Cerrar</button>
                                                                        <button type="submit" class="btn btn-primary" id="save">Guardar Contraseña</button>
                                                                    </div>
                                                                </div>
   
                                                            </form> 
                                                            </div>   
                                                        </div>
                                                
                                            </div>
                                        </div>
                                </section>
                            </div>


                            <div class="container">
                                <section class="fondo-null espacio-admin" id="verificacionCorreo">
                                        <div class="container">
                                            <div class="col mx-1  pt-3 mb-1 border neontabla">
                                                <h2 class="neones"><i class="fa-solid fa-check"></i> Verifique y Active</h2>
                                                <h5 style="text-align: center;" >Dé click al boton</h5>
                                                <h5 style="text-align: center; margin-left: 1.5em; margin-right: 1.5em;" >para obtener el enlace de confirmacion</h5>
                                                
                                                <div class="espacio-AA">
                                                    <button class="btn btn-primary neontextlanding bg-black " onclick="correoverificacion(); bloquear(10000,this)" style="margin:2% 30%; font-size: 14px;">Verificar Correo</button> 
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                        </div>
                                </section>
                            </div>

                            <div class="container" style="display: flex; align-items: center;">
                                <section class="fondo-null espacio-admin" id="yaverificada">
                              <!-- principal registro  -->
                                    <div class="row espacio-admin">
                                        <div class="col-sm-12 border neontabla text-white w-100 ">
                                        <h2 class="neones"><i class="fa-solid fa-circle-check"></i> Su correo ya se encuentra verificado</h2>
                                        <p>Tiene acceso a todas las funciones como cliente verificado</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>








        

    <br>


<!--Fin Cambio Contraseña-->

    
</div>
<!-- </section> -->
<script src="build/js/ajax/ajax.administrar.js"></script>
<script src="build/js/ajax/ajax.datosPersonales.js"></script>
<script src="build/js/ajax/ajax.cambiarContra.js"></script>
<script src="build/js/ajax/ajax.histfactura.js"></script>
