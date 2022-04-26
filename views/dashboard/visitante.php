<div class="content-principal container mt-20">
    <div class="flex-between">
        <h3>Visitantes</h3>
        <button type="button" id="model-Visitante" data-bs-toggle="modal" data-bs-target="#modalVisitante" class="btn-inline btn-success flex-center">
            <i class="fas fa-plus-circle"></i> Agregar Visitante
        </button>
    </div>
</div>

<div class="content-principal container mt-20">
    <div class="table-responsive">
        <table class="table table-purple table-striped table-hover w-100 table-light table-fixed" id="tablavisitante">
             <!--PARA PONER CON BLANCO: table table-striped table-hover table-light table-fixed w-100-->    
            <thead class="table-dark sticky">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Pregunta</th>
                    <th>Editar / Borrar</th>
                </tr>
                </thead>
                <tbody>

            </tbody>
        </table>
    </div>
</div>


<!-- ./CONTENT -->
<div class="modal fade" id="modalVisitante" tabindex="-1" aria-labelledby="modalVisitante" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Guardar Visitante</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrar"></button>
            </div>
        
            <div class="modal-body">
                <form id="formVisitante" enctype="multipart/form-data">
                    <input type="hidden" id="id">
                    <div class="mb-3">
                        <label for="nombre">Nombre Visitante</label>
                        <input type="text" class="form-control" id="vis_nombre">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Apellido Visitante</label>
                        <input type="text" class="form-control" id="vis_apellidos">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Email Visitante</label>
                        <input type="text" class="form-control" id="vis_email">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Telefono Visitante</label>
                        <input type="number" class="form-control" id="vis_telefono">
                    </div>

                    <div class="mb-3">
                        <label for="nombre">Pregunta Visitante</label>
                        <input type="text" class="form-control" id="vis_pregunta">
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


<script src="build/js/ajax/ajax.visitante.js"></script>
