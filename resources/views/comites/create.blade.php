@extends('layouts.app', ['page' => __('Cómites'), 'pageSlug' => 'comites'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comités
@endsection

@section('content')
	<div class="card">
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('comites.store') }}" enctype="multipart/form-data">

				@csrf

				<div>
				  <h3 class="card-title">Nuevo Cómite</h3>
				</div>
				<div class="form-group">
				  <label>Nombre</label>
				  <input name="ComiName" type="text" placeholder="Ej: COPASST" id="ComiName" class="text-center form-control" required="">
				</div>
				<div class="custom-input-file {{ $errors->has('ComiSrc') ? ' has-danger' : '' }}">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Logo</b>" data-content="Imagen representativa o Logo del cómite. Este archivo debe ser de tipo: jpg, jpeg, png."><i class="far fa-question-circle"></i> Logo</label>
					<input id="ComiSrc" name="ComiSrc" type="file" class="form-control form-control-alternative{{ $errors->has('ComiSrc') ? ' is-invalid' : '' }}" required="">
					@include('alerts.feedback', ['field' => 'ComiSrc'])
					<img id="ComiSrcOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/>
				</div>
				<div class="custom-input-file {{ $errors->has('ComiImage') ? ' has-danger' : '' }}">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Foto de los integrantes</b>" data-content="Adjuntar foto de los integrantes del cómite. Este archivo debe ser de tipo: jpg, jpeg, png."><i class="far fa-question-circle"></i> Foto de los integrantes</label>
					<input id="ComiImage" name="ComiImage" type="file" class="form-control form-control-alternative{{ $errors->has('ComiImage') ? ' is-invalid' : '' }}" required="">
					@include('alerts.feedback', ['field' => 'ComiImage'])
					<img id="ComiImageOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/>
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Función del cómite</b>" data-content="Objetivo y/o función principal del cómite."><i class="far fa-question-circle"></i> Función</label>

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
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Observaciones</b>" data-content="Temas tratados en la ultima reúnion y observaciones generales."><i class="far fa-question-circle"></i> Observaciones</label>
					
					<input type="text" name="ComiObservations" id="ComiObservations" class="text-center form-control">
				</div>
				<div class="form-group">
					<label>Próxima fecha de reunión</label>
					<input type="date" name="ComiDateNext" id="ComiDateNext" class="text-center form-control">
				</div>
				{{-- <div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Integrantes</b>" data-content="Ingresar el nombre de los integrantes del cómite."><i class="far fa-question-circle"></i> Integrantes</label>

					<input type="text" name="ComiIntegrantes" id="ComiIntegrantes" class="text-center form-control">
				</div> --}}
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function (e) {
        var output = $('#'+input.id+'Output');
        output.attr('src', e.target.result);
        output.attr('class', 'd-block');
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $('input[type="file"]').change(function(){
    readURL(this);
  });
</script>
@endpush