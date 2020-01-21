@extends('layouts.app', ['pageSlug' => 'comites'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comités
@endsection

@section('content')

	<div class="card-body">
		<form role="form" method="POST" action="{{ route('comites.store') }}" enctype="multipart/form-data">

			@csrf

			<div>
			  <h3 class="card-title">Nuevo Cómite</h3>
			</div>
			<div class="form-group">
			  <label>Nombre del cómite</label>
			  <input name="ComiName" type="text" placeholder="Ej: COPASST" id="ComiName" class="text-center form-control" required="">
			</div>
			<div class="custom-input-file">
				<label>Imagen del cómite</label>
				<input name="ComiSrc" type="file" id="ComiSrc" required="">
			</div>
			<div class="custom-input-file">
			    <label>Foto del cómite</label>
				<input name="ComiImage" type="file" id="ComiImage" required="">
			</div>
			<div class="form-group">
			    <label>Función del cómite</label>
				<input type="text" name="ComiParaQueSirve" id="ComiParaQueSirve" class="text-center form-control">
			</div>
			<div class="form-group">
			    <label>Telefono de contacto</label>
				<input type="text" name="ComiTelefono" id="ComiTelefono" class="text-center form-control">
			</div>
			<div class="form-group">
			  <label>Email de Contacto</label>
			  <input type="text" name="ComiEmail" id="ComiEmail" class="text-center form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-fill btn-success">Crear</button>
			</div>
		</form>
	</div>

@endsection