@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@section('content')

	<div class="card">
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('releases.store') }}" enctype="multipart/form-data">

				@csrf

				<div>
				  <h3 class="card-title">Nuevo Anuncio</h3>
				</div>
				<div class="form-group">
				  <label>Nombre del anuncio</label>
				  <input name="RelName" type="text" id="RelName" class="text-center form-control" required="">
				</div>
				<div class="custom-input-file">
					<label>Imagen del anuncio</label>
					<input name="RelSrc" type="file" id="RelSrc" required="">
				</div>
				<div class="form-group">
				    <label>Mensaje del anuncio</label>
					<input type="text" name="RelMessage" id="RelMessage" class="text-center form-control">
				</div>
				<div class="form-group">
				    <label>Tipo de anuncio</label>
					<select name="RelType" id="RelType" class="text-center form-control">
						<option value="Comunicado">Comunicado</option>
						<option value="Noticia">Noticia</option>
					</select>
				</div>
				<div class="form-group">
				  <label>Clasificación del anuncio</label>
				  <select name="RelGeneral" id="RelGeneral" class="text-center form-control" >
				  	<option value="0" onclick="General()">General</option>
				  	<option value="1" onclick="Restringido()">Restringido</option>
				  </select>
				</div>

				<div class="col-md-12" id="div-contenedor">
					
				</div>

				<div class="form-group">
					<button type="submit" class="fas fa-plus btn btn-fill btn-success"> Crear</button>
				</div>
			</form>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    function editBoton(id){
        var data = id;
        var token = '{{csrf_token()}}';
        var data = {id,_token:token};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: "{{url('/CambioDeBoton')}}/"+id,
            data: data,
            success: function (msg) {
                $('#Boton-alert-'+id).empty();
                $('#Boton-alert-'+id).append(`<i><strong>Realizado</strong></i>`);
                alert(msg);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("Hay un error, no esta pasando por el AjaxController");
            }
        });
    }
</script>

<script type="text/javascript">
	
	function Restringido() {
		$('#div-contenedor').empty();
		$('#div-contenedor').append(`
			<div class="form-group">
				<label class="form-control-label">Anuncio emitido para:</label>
				<select multiple name="users[]" id="input-users" class="form-control form-control-alternative" placeholder="{{ __('Selecciona los usuarios a los cuales se les enviara el correo')}}" value="{{ old('users[]') }}"  required>
					@foreach($users as $user)
					<option value="{{$user->email}}">{{$user->name}}  -  {{$user->email}}</option>
					@endforeach
				</select>
			</div>
		`);
		alert(msg);
	}

	function General() {
		$('#div-contenedor').empty();
		alert(msg);
	}

</script>

@endpush