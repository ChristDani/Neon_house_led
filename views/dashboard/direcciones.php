<div class="content-principal container mt-20">
    <div class="flex-between">
        <h3>Direcciones</h3>
    </div>
</div>

<div class="content-principal container mt-20">
    <div class="table-responsive">
        <table class="table table-purple table-striped table-hover w-100 table-light table-fixed" id="tabladirecciones">
             <!--PARA PONER CON BLANCO: table table-striped table-hover table-light table-fixed w-100-->    
            <thead class="table-dark sticky">
                <tr>
                    <th>tiktok</th>
                    <th>instagram</th>
                    <th>pinterest</th>
                    <th>facebook</th>
                    <th>whatsap</th>
                    <th>correo empresa</th>
                    <th>correo emisor</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>

            </tbody>
        </table>
    </div>
</div>


<!-- ./CONTENT -->
<div class="modal fade" id="modalDirecciones" tabindex="-1" aria-labelledby="modalDirecciones" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Modificar Dirreciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrar"></button>
            </div>
        
            <div class="modal-body">
                <form id="formDirecciones" enctype="multipart/form-data">
                    <input type="hidden" id="id">
                    <div class="mb-3">
                        <label for="nombre">url tiktok</label>
                        <input type="text" class="form-control" id="url_tiktok">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">url instagram</label>
                        <input type="text" class="form-control" id="url_instagram">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">url Pinterest</label>
                        <input type="text" class="form-control" id="url_pinterest">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">url Facebook</label>
                        <input type="text" class="form-control" id="url_facebook">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">url Whatsapp</label>
                        <input type="text" class="form-control" id="url_whatsap">
                    </div>
                    <div class="mb-3">
                        <label for="nombre">correo de la empresa</label>
                        <input type="text" class="form-control" id="url_correoempresa">
                    </div>
                    <div class="mb-3">
                        <label for="nombre">correo emisor</label>
                        <input type="text" class="form-control" id="url_correoemisor">
                    </div>


                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="save">Guardar</button>
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="build/js/ajax/ajax.direcciones.js"></script>
