@extends('layouts.app', ['page' => __('Requisitos y Documentos'), 'pageSlug' => 'requisitos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Requisitos y Documentos Legales
@endsection

@section('content')

	<div class="card">
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('requisitos.store') }}" enctype="multipart/form-data">

				@csrf

				<div>
				  <h3 class="card-title">Nuevo Requisito</h3>
				</div>
				<div class="form-group">
				  <label>Nombre del requisito legal</label>
				  <input name="ReqName" type="text" placeholder="" id="ReqName" class="text-center form-control" required="">
				</div>
				<div class="custom-input-file">
					<label>Tipo de requisito legal</label>
					{{-- <input name="ReqType" type="text" id="ReqType" class="text-center form-control" required=""> --}}
					<select name="ReqType" id="ReqType" class="text-center form-control" required="">
						<option value="0">Legales</option>
						<option value="1">Empresariales</option>
						<option value="2">Otras - Cliente</option>
					</select>
				</div>
				<div class="form-group">
				    <label>Fecha de emisión del requisito</label>
					<input name="ReqDate" type="date" placeholder="" id="ReqDate" class="text-center form-control" required="">
				</div>
				<div class="form-group">
				    <label>Ente </label>
					<input name="ReqEnte" type="text" placeholder="" id="ReqEnte" class="text-center form-control" required="">
				</div>
				<div class="form-group">
				    <label>Descripción del requisito legal</label>
					<input name="ReqQueDice" type="text" placeholder="" id="ReqQueDice" class="text-center form-control" required="">
				</div>
				<div class="custom-input-file">
				    <label>Adjunto</label>
					<input name="ReqSrc" type="file" placeholder="" id="ReqSrc" class="form-control">
				</div>
				<div class="form-group">
				    <label>Link</label>
					<input name="ReqLink" type="text" placeholder="" id="ReqLink" class="text-center form-control">
				</div>
				<div class="form-group">
					<label class="form-control-label">Áreas implicadas al requisito legal</label>
					<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}"  required>
						<option value="">Todas las áreas</option>
						@foreach($areas as $area)
						<option value="{{$area->id}}">{{$area->AreaName}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-primary"> Guardar</button>
				</div>
			</form>
		</div>
	</div>

@endsection