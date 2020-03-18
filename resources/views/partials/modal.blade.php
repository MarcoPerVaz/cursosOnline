
<div class="modal fade" id="appModal" tabindex="-1" role="dialog" aria-labelledby="appModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            {{-- Aquí se muestra el modal creado desde jQuery función click - resources/views/Profile/index.blade.php --}}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("Cerrar") }}</button>
                <button type="button" class="btn btn-primary" id="modalAction"></button>
            </div>
        </div>
    </div>
</div>