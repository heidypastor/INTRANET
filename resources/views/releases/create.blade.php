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
				<div class="form-group{{ $errors->has('RelName') ? ' has-danger' : '' }}">
				  <label>Nombre del anuncio</label>
				  <input name="RelName" type="text" id="RelName" class="text-center form-control form-control-alternative{{ $errors->has('RelName') ? ' is-invalid' : '' }}" required="">
				  @include('alerts.feedback', ['field' => 'RelName'])
				</div>
				<div class="custom-input-file {{ $errors->has('RelSrc') ? ' has-danger' : '' }}">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Imagen del anuncio</b>" data-content="Imagen referencia a la noticia o comunicado emitido. Este archivo debe ser de tipo: jpeg,jpg,png."><i class="far fa-question-circle"></i>Imagen del anuncio</label>
					<input name="RelSrc" type="file" id="RelSrc" required="" class="form-control-alternative{{ $errors->has('RelSrc') ? ' is-invalid' : '' }}">
					@include('alerts.feedback', ['field' => 'RelSrc'])
				</div>
				<div class="form-group{{ $errors->has('RelMessage') ? ' has-danger' : '' }}">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Mensaje del anuncio</b>" data-content="Ingresar el mensaje que quiere comunicar en dicho anuncio. Máximo 512 caracteres."><i class="far fa-question-circle"></i> Mensaje del anuncio</label>
					<input type="text" name="RelMessage" id="RelMessage" class="text-center form-control form-control-alternative{{ $errors->has('RelMessage') ? ' is-invalid' : '' }}">
					@include('alerts.feedback', ['field' => 'RelMessage'])
				</div>
				<div class="form-group{{ $errors->has('RelType') ? ' has-danger' : '' }}">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de anuncio</b>" data-content="Ingresar el tipo de anuncio al que pertenece, es decir, comunicado o noticia."><i class="far fa-question-circle"></i> Tipo de anuncio</label>
					<select name="RelType" id="RelType" class="text-center form-control form-control-alternative{{ $errors->has('RelType') ? ' is-invalid' : '' }}">
						<option value="Comunicado">Comunicado</option>
						<option value="Noticia">Noticia</option>
					</select>
					@include('alerts.feedback', ['field' => 'RelType'])
				</div>
				<div class="form-group{{ $errors->has('RelGeneral') ? ' has-danger' : '' }}">
				  <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Clasificación del anuncio</b>" data-content="Ingresar si el comunicado o anuncio es de tipo restringido o general."><i class="far fa-question-circle"></i> Clasificación del anuncio</label>
				  <select name="RelGeneral" id="RelGeneral" class="text-center form-control form-control-alternative{{ $errors->has('RelGeneral') ? ' is-invalid' : '' }}" onchange="clasificacion()" >
				  	<option value="0">General</option>
				  	<option value="1">Restringido</option>
				  </select>
				  @include('alerts.feedback', ['field' => 'RelGeneral'])
				</div>

				<div class="col-md-12" id="div-contenedor">
					
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary"> Guardar</button>
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