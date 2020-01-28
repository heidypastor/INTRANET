@extends('layouts.app', ['page' => __('Requisitos Legales'), 'pageSlug' => 'requisitos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Requisitos Legales
@endsection

@section('content')

	<div class="card">
		<div class="card-body">
			<form role="form" method="POST" action="{{ route('requisitos.update', $requisito) }}" enctype="multipart/form-data">

				@csrf
				@method('PUT')

				<div>
				  <h3 class="card-title">Editar Requisito</h3>
				</div>
				<div class="form-group">
				  <label>Nombre del requisito legal</label>
				  <input name="ReqName" type="text" placeholder="" id="ReqName" class="text-center form-control" value="{{$requisito->ReqName}}">
				</div>
				<div class="custom-input-file">
					<label>Tipo de requisito legal</label>
					<input name="ReqType" type="text" id="ReqType" class="text-center form-control" value="{{$requisito->ReqType}}">
				</div>
				<div class="form-group">
				    <label>Fecha de publicación del requisito legal</label>
					<input name="ReqDate" type="date" placeholder="" id="ReqDate" class="text-center form-control" value="{{$requisito->ReqDate}}">
				</div>
				<div class="form-group">
				    <label>Ente </label>
					<input name="ReqEnte" type="text" placeholder="" id="ReqEnte" class="text-center form-control" value="{{$requisito->ReqEnte}}">
				</div>
				<div class="form-group">
				    <label>Descripción del requisito legal</label>
					<input name="ReqQueDice" type="text" placeholder="" id="ReqQueDice" class="text-center form-control" value="{{$requisito->ReqQueDice}}">
				</div>
				<div class="form-group">
					<label class="form-control-label">Áreas implicadas al requisito legal</label>
					<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}"  required>
						@foreach($areas as $area)
						<option value="{{$area->id}}">{{$area->AreaName}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-fill btn-success fas fa-arrow-circle-up"> Actualizar</button>
				</div>
			</form>
		</div>
	</div>

@endsection