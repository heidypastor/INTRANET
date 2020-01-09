@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')

	<div class="card-header text-center">
	  <h3 class="card-title">Creación de Indicadores</h3>
	</div>

    <div class="modal-body">
        <form role="form" method="POST" action="{{ route('indicators.store') }}" enctype="multipart/form-data">
          	@csrf
            <div class="box-body form-group">
              <label>Nombre del Indicador</label>
            </div>
            <div class="box-body form-group">
              <input name="IndName" type="text" class="text-center form-control" required>
            </div>
            <div class="box-body form-group">
              <label>Objetivo del Indicador</label>
            </div>
            <div class="box-body form-group">
              <input name="IndObjective" type="text" class="text-center form-control" required>
            </div>
            <div class="box-body form-group">
              <label>¿Qué mide?</label>
            </div>
            <div class="box-body form-group">
              <input name="IndQueMide" type="text" class="text-center form-control" required>
            </div>		
            <div class="box-body form-group">
              <label>Grafica</label>
            </div>
            <div class="box-body form-group">
              <input name="IndGraphic" type="file" class="text-center form-control" required="">
              <input name="nada" type="" placeholder="Adjuntar Archivo" class="text-center form-control">
            </div>
            <div class="box-body form-group">
              <label>Tabla (Archivo)</label>
            </div>
            <div class="box-body form-group">
              <input name="IndTable" type="file" class="text-center form-control" required>
              <input name="nada1" type="" placeholder="Adjuntar Archivo" class="text-center form-control">
            </div>
            <div class="box-body form-group">
              <label>Analisis</label>
            </div>
            <div class="box-body form-group">
              <input name="IndAnalysis" type="text" class="text-center form-control" required>
            </div>
            <div class="box-body form-group">
              <label>Fecha Inicio</label>
            </div>
            <div class="box-body form-group">
              <input name="IndDateFrom" type="date" class="text-center form-control" required>
            </div>
            <div class="box-body form-group">
              <label>Fecha Fin</label>
            </div>
            <div class="box-body form-group">
              <input name="IndDateUntil" type="date" class="text-center form-control" required>
            </div>
              <button type="submit" class="btn btn-fill btn-success">Crear</button>
        </form>
    </div>
@endsection