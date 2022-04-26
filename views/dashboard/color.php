<div class="content-principal container mt-20">
    <div class="flex-between">
        <h3>Color</h3>

        <button type="button" id="model-register" data-bs-toggle="modal" data-bs-target="#modalColor" class="btn-inline btn-success flex-center">
            <i class="fas fa-plus-circle"></i> Agregar
        </button>
    </div>
</div>

<div class="content-principal container mt-20">
    <div class="table-responsive">
        <table class="table table-purple table-striped table-hover  w-100 table-light table-fixed" id="tablacolor">
            <thead class="table-dark sticky">
                <tr>
                    <th>Nombre</th>
                    <th>Codigo de color</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>


<div class="modal fade" id="modalColor" tabindex="-1" aria-labelledby="modalColor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Guardar Color</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrar"></button>
            </div>
            <div class="modal-body">
                <form action="post" id="formColor">
                    <input type="hidden" id="id">
                    <div class="mb-3">
                        <label for="nombre">Nombre de color</label>
                        <input type="text" class="form-control" id="nombreColor">
                    </div>
                    <div class="mb-3 flex">
                        <label for="rgb">Color</label>
                        <input type="color" class="form-color" id="rgb">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="save">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="build/js/ajax/ajaxColor.js"></script>