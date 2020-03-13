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
				<div class="form-group">
					<label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo</b>" data-content="Tipo de requisito y/o documento legal."><i class="far fa-question-circle"></i> Tipo de requisito legal</label>
					{{-- <input name="ReqType" type="text" id="ReqType" class="text-center form-control" value="{{$requisito->ReqType}}"> --}}
					<select name="ReqType" id="ReqType" class="text-center form-control">
						<option value="0">Legales</option>
						<option value="1">Empresariales</option>
						<option value="2">Otras - Cliente</option>
					</select>
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha</b>" data-content="Fecha de publicación del requisito y/o documento legal."><i class="far fa-question-circle"></i> Fecha de emisión del requisito</label>
					<input name="ReqDate" type="date" placeholder="" id="ReqDate" class="text-center form-control" value="{{$requisito->ReqDate}}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Ente emisor</b>" data-content="Entidad la cual emitio el requisito y/o documento legal."><i class="far fa-question-circle"></i> Ente </label>
					<input name="ReqEnte" type="text" placeholder="" id="ReqEnte" class="text-center form-control" value="{{$requisito->ReqEnte}}">
				</div>
				<div class="form-group">
				    <label>Descripción del requisito legal</label>
					<input name="ReqQueDice" type="text" placeholder="" id="ReqQueDice" class="text-center form-control" value="{{$requisito->ReqQueDice}}">
				</div>
				<div class="custom-input-file">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Adjunto</b>" data-content="Ingresar el archivo correspondiente a la información sobre dicho requisito y/o documento legal."><i class="far fa-question-circle"></i> Adjunto</label>
					<input name="ReqSrc" type="file" placeholder="" id="ReqSrc" class="form-control" value="{{$requisito->ReqSrc}}">
				</div>
				<div class="form-group">
				    <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Link</b>" data-content="Ingresar el Link correspondiente a la página en relación donde se encuentra la información de dicho requisto y/o documento legal."><i class="far fa-question-circle"></i> Link</label>
					<input name="ReqLink" type="text" placeholder="" id="ReqLink" class="text-center form-control" value="{{$requisito->ReqLink}}">
				</div>
				<div class="form-group">
					<label class="form-control-label"  data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Aplicable</b>" data-content="Este requisito es aplicable para dichas áreas."><i class="far fa-question-circle"></i> Aplicable</label>
					<select multiple name="areas[]" id="input-area" class="form-control form-control-alternative" placeholder="{{ __('Selecciona las áreas a las que pertenece')}}" value="{{ old('areas[]') }}"  required>
						<option value="">Todas las áreas</option>
						@foreach($areas as $area)
						<option
						@foreach($requisito->areas as $areaSelect)
						@if($areaSelect->id == $area->id)
						selected
						@endif
						@endforeach
						value="{{$area->id}}">{{$area->AreaName}}</option>
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