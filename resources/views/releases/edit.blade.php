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
			<form role="form" method="POST" action="{{ route('releases.update', $release) }}" enctype="multipart/form-data">
				@method('PUT')
				@csrf

				<div>
				  <h3 class="card-title">Editar Anuncio</h3>
				</div>
				<div class="form-group">
				  <label>Nombre del anuncio</label>
				  <input name="RelName" type="text" id="RelName" class="text-center form-control" value="{{$release->RelName}}">
				</div>
				<div class="custom-input-file">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Imagen del anuncio</b>" data-content="Imagen referencia a la noticia o comunicado emitido."><i class="far fa-question-circle"></i>Imagen del anuncio</label>
					<input name="RelSrc" type="file" id="RelSrc" value="{{Storage::url($release->RelSrc)}}">
				</div>
				<div class="form-group">
				    <label>Mensaje del anuncio</label>
					<input type="text" name="RelMessage" id="RelMessage" class="text-center form-control" value="
					{{$release->RelMessage}}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de anuncio</b>" data-content="Ingresar el tipo de anuncio al que pertenece, es decir, comunicado o noticia."><i class="far fa-question-circle"></i> Tipo de anuncio</label>
					<select name="RelType" id="RelType" class="text-center form-control">
						<option value="Comunicado">Comunicado</option>
						<option value="Noticia">Noticia</option>
					</select>
				</div>

				<div class="form-group">
				  <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Clasificación del anuncio</b>" data-content="Ingresar si el comunicado o anuncio es de tipo restringido o general."><i class="far fa-question-circle"></i> Clasificación del anuncio</label>
				  <select name="RelGeneral" id="RelGeneral" class="text-center form-control" onchange="clasificacion()" >
				  	<option value="0">General</option>
				  	<option value="1">Restringido</option>
				  </select>
				</div>

				<div class="col-md-12" id="div-contenedor">
					
				</div>

				<div class="form-group">
					<button type="submit" class="fas fa-arrow-circle-up btn btn-fill btn-success"> Actualizar</button>
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
		function clasificacion(){
			var clasificacion = $('#RelGeneral').val();
			if (clasificacion == 0) {
				$('#div-contenedor').empty();
			}else{
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
			}
		}
	</script>

@endpush