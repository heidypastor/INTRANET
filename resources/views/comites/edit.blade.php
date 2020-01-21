@extends('layouts.app', ['page' => __('Comites'), 'pageSlug' => 'comites'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comités
@endsection

@section('content')
	
		<div class="card-header text-center">
		  <h3 class="card-title">Editar Indicador</h3>
		</div>
	    <div class="box-body">
	        <form role="form" method="POST" action="{{ route('comites.update', $comite) }}" enctype="multipart/form-data">
	          	@method('PUT')
	            @csrf

	            <div>
	              <h3 class="card-title">Editar Cómite</h3>
	            </div>
	            <div class="form-group">
	              <label>Nombre del cómite</label>
	              <input name="ComiName" type="text" value="{{$comite->ComiName}}" id="ComiName" class="text-center form-control">
	            </div>
	            <div class="custom-input-file">
	            	<label>Imagen del cómite</label>
	            	<input name="ComiSrc" type="file" value="{{$comite->ComiSrc}}" id="ComiSrc">
	            </div>
	            <div class="custom-input-file">
	                <label>Foto del cómite</label>
	            	<input name="ComiImage" type="file" value="{{$comite->ComiImage}}" id="ComiImage">
	            </div>
	            <div class="form-group">
	                <label>Función del cómite</label>
	            	<input type="text" name="ComiParaQueSirve" value="{{$comite->ComiParaQueSirve}}" id="ComiParaQueSirve" class="text-center form-control">
	            </div>
	            <div class="form-group">
	                <label>Telefono de contacto</label>
	            	<input type="text" name="ComiTelefono" value="{{$comite->ComiTelefono}}" id="ComiTelefono" class="text-center form-control">
	            </div>
	            <div class="form-group">
	              <label>Email de Contacto</label>
	              <input type="text" name="ComiEmail" value="{{$comite->ComiEmail}}" id="ComiEmail" class="text-center form-control">
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="fas fa-arrow-circle-up btn btn-fill btn-success"> Actualizar</button>
	            </div>

	        </form>
	    </div>

@endsection