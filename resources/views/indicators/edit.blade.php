@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
	<div class="card-header text-center">
	  <h3 class="card-title">Editar Indicador</h3>
	</div>
    <div class="box-body">
        <form id="formActualiIndicado" role="form" method="POST" action="{{ route('indicators.update', $indicator) }}" enctype="multipart/form-data" id="formuediindi">

          	@method('PUT')
            @csrf
            <div class="form-group">
              <label>Nombre del Indicador</label>
              <input name="IndName" type="text" value="{{$indicator->IndName}}" class="text-center form-control">
            </div>
            <div class="form-group">
              <label>Objetivo del Indicador</label>
              <input name="IndObjective" type="text" value="{{$indicator->IndObjective}}" class="text-center form-control">
            </div>
            <div class="form-group">
              <label>¿Qué mide?</label>
              <input name="IndQueMide" type="text" value="{{$indicator->IndQueMide}}" class="text-center form-control">
            </div>		
            <div class="custom-input-file">
              <label>Grafica</label>
              <input name="IndGraphic" type="file" class="form-control">
            </div>
            <div class="custom-input-file">
              <label>Tabla (Archivo)</label>
              <input name="IndTable" type="file" class="form-control">
            </div>
            <div class="form-group">
              <label>Analisis</label>
              <input name="IndAnalysis" type="text" value="{{$indicator->IndAnalysis}}" class="text-center form-control">
            </div>
            <div class="form-group">
              <label>Fecha Inicio</label>
              <input name="IndDateFrom" type="date" value="{{$indicator->IndDateFrom}}" class="text-center form-control">
            </div>
            <div class="form-group">
              <label>Fecha Fin</label>
              <input name="IndDateUntil" type="date" value="{{$indicator->IndDateUntil}}" class="text-center form-control">
            </div>
              <button type="submit" class="fas fa-arrow-circle-up btn btn-fill btn-success"> Actualizar</button>
        </form>
    </div>
@endsection