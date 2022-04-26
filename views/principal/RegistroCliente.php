
    
    <div class="bg-black container-fluid tamaño-reg">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/9d3aa3a67f.js" crossorigin="anonymous"></script>
        <section class="row pb-3">
            <form class="formContact" id="formContact1" method="POST">
                <div class="container espacio">
                    <div class="row text-white mx-1 mx-sm-5 pt-3 mb-2 d-flex medio-registro justify-content-end">
                            <div class="formulario col-12 col-sm-12 neontabla altura-regi">
                                <h1></h1>
                                    <div class="container">
                                        <div class="row">
                                            <div class="modal-field">
                                                <input type="hidden" class="neontextlanding bg-transparent text-center form-control my-3 border-0" name="contador" id="contador" value=1>
                                            </div>
                                            <div class="modal-field culto">
                                                <div class="icon">
                                                    <i class="fas fa-user fab iconoFont"></i>
                                                </div>
                                                <input type="text" class="p-2 bg-transparent neontextlanding  border-0 border rounded me-1 me-sm-4 my-3 d-block text-white espacio-reg" name="nombre" id="nombre" placeholder="Nombres" required>
                                            </div>
                                            <div class="modal-field culto">
                                                <div class="icon">
                                                    <i class="fas fa-user fab iconoFont" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" class="p-2 bg-transparent neontextlanding  border-0 border rounded me-1 me-sm-4 my-3 d-block text-white espacio-reg" name="apellido" id="apellidos" placeholder="Apellidos" required>
                                            </div>
                                            <div class="modal-field culto">
                                                <div class="icon">
                                                    <i class="fas fa-regular fa-envelope fab iconoFont"></i>
                                                </div>
                                                <input type="email" class="p-2 bg-transparent neontextlanding  border-0 border rounded me-1 me-sm-4 my-3 d-block text-white espacio-reg" name="correo" id="correo" placeholder="Correo Electrónico" required>
                                            </div>
                                            <div class="modal-field culto">
                                                <div class="icon">
                                                    <i class="fas fa-light fa-lock fab iconoFont"></i>
                                                </div>
                                                <input type="text" class="p-2 bg-transparent neontextlanding  border-0 border rounded me-1 me-sm-4 my-3 d-block text-white espacio-reg" name="contraseña" id="password" placeholder="Contraseña" required>
                                            </div> <!--crea tu propio boton, lo agregas en NEON.css -->
                                            <button type="submit" class="button-contact col-5 btn m-2 mx-auto d-block neonbotton neontabla" id="btn-modal-inscripcion" onclick="registro()" >Registrarse</button>
                                            <div class="footer-registro">
                                                <div class="record-right">
                                                    <input type="checkbox" name="Recordar" value="Recordar" class="check" id="checkbox"/>
                                                    <h4 class="record-regis">Recordarme</h4>
                                                </div>
                                                <div class="pregunta-Reg">
                                                    <p class="incog">
                                                        ¿Ya tienes una cuenta?
                                                    </p>
                                                    <a href="" class="enlace-registro">
                                                        <h5>
                                                            Inicia Sesión
                                                        </h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/9d3aa3a67f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/build/js/ajax/ajax.registroCliente.js"></script>