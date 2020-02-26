<div class="modal fade" id="{{$idModal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$titulo}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- <form role="form" method="POST" action="{{$action}}" id="{{$idModal}}" enctype="multipart/form-data">
          @method('PUT') --}}
          {{$form}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-fill btn-success fas fa-arrow-circle-up"> Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>