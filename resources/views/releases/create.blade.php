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
				  <select name="RelGeneral" id="RelGeneral" class="text-center form-control">
				  	<option value="0">General</option>
				  	<option value="1">Restringido</option>
				  </select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-success">Crear</button>
				</div>
			</form>
		</div>
	</div>

@endsection