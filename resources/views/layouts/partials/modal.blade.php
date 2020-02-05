<div class="modal fade" id="eliminar{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title negrilla" id="exampleModalLabel">Eliminar</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">

      	<div style="font-size: 5em; color: red; text-align: center; margin: auto;">
      	  <i class="fas fa-exclamation-triangle"></i>
      	  <span style="font-size: 0.3em; color: black;"><p>¿Seguro quiere eliminar <strong>{{ $textModal }}</strong>?</p></span>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary pull-left fas fa-times" data-dismiss="modal">  Cerrar</button> 
        {{ $botonModal }}
      </div>
    </div>
  </div>
</div>