@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
  <div class="card">
  	<div class="card-header text-center">
  	  <h3 class="card-title"><strong>Editar Indicador</strong></h3>
  	</div>
      <div class="box-body" style="margin: 1em 1em 1em 1em;">
          <form id="formActualiIndicado" role="form" method="POST" action="{{ route('indicators.update', $indicator) }}" enctype="multipart/form-data" id="formuediindi">

            	@method('PUT')
              @csrf
              <div class="form-group{{ $errors->has('IndName') ? ' has-danger' : '' }}">
                <label>Nombre del Indicador</label>
                <input name="IndName" type="text" value="{{$indicator->IndName}}" class="text-center form-control form-control-alternative{{ $errors->has('IndName') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndName'])
              </div>
              <div class="form-group{{ $errors->has('IndObjective') ? ' has-danger' : '' }}">
                <label>Objetivo del Indicador</label>
                <input name="IndObjective" type="text" value="{{$indicator->IndObjective}}" class="text-center form-control form-control-alternative{{ $errors->has('IndObjective') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndObjective'])
              </div>
              <div class="form-group{{ $errors->has('IndQueMide') ? ' has-danger' : '' }}">
                <label>¿Qué mide?</label>
                <input name="IndQueMide" type="text" value="{{$indicator->IndQueMide}}" class="text-center form-control form-control-alternative{{ $errors->has('IndQueMide') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndQueMide'])
              </div>		
              <div class="custom-input-file {{ $errors->has('IndGraphic') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Gráfica</b>" data-content="Ingresar la imagen correspondiente a la Gráfica. Este archivo debe ser de tipo: jpg, jpeg, png"><i class="far fa-question-circle"></i> Gráfica</label>
                <input name="IndGraphic" type="file" class="form-control form-control-alternative{{ $errors->has('IndGraphic') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndGraphic'])
              </div>
              <div class="custom-input-file {{ $errors->has('IndTable') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tabla (Archivo)</b>" data-content="Adjuntar el archivo correspondiente a la gráfica. Este archivo debe estar en PDF."><i class="far fa-question-circle"></i> Tabla (Archivo)</label>
                <input name="IndTable" type="file" class="form-control form-control-alternative{{ $errors->has('IndTable') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndTable'])
              </div>
              <div class="form-group{{ $errors->has('IndAnalysis') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Analisis</b>" data-content="Ingresar el analisis realizado al indicador con respecto a su objetivo. Máximo 512 caracteres."><i class="far fa-question-circle"></i> Analisis</label>
                <input name="IndAnalysis" type="text" value="{{$indicator->IndAnalysis}}" class="text-center form-control form-control-alternative{{ $errors->has('IndAnalysis') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndAnalysis'])
              </div>
              <div class="form-group{{ $errors->has('IndDateFrom') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha Inicio</b>" data-content="Fecha de inicio de toma de datos para el desarrollo del indicador."><i class="far fa-question-circle"></i> Fecha Inicio</label>
                <input name="IndDateFrom" type="date" value="{{$indicator->IndDateFrom}}" class="text-center form-control form-control-alternative{{ $errors->has('IndDateFrom') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndDateFrom'])
              </div>
              <div class="form-group{{ $errors->has('IndDateUntil') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Fecha Fin</b>" data-content="Fecha de la última toma de datos para el desarrollo de los indicadores."><i class="far fa-question-circle"></i> Fecha Fin</label>
                <input name="IndDateUntil" type="date" value="{{$indicator->IndDateUntil}}" class="text-center form-control form-control-alternative{{ $errors->has('IndDateUntil') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndDateUntil'])
              </div>
              <div class="form-group{{ $errors->has('IndType') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de Indicador</b>" data-content="Ingresar el tipo de indicador si es de tipo estrategico o general."><i class="far fa-question-circle"></i> Tipo de Indicador</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndType') ? ' is-invalid' : '' }}" required="" name="IndType" id="IndType">
                  <option value="0">Estrategico</option>
                  <option value="1">General</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndType'])
              </div>
              <div class="form-group{{ $errors->has('IndEfe') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Indicador de:</b>" data-content="Seleccione el tipo de indicador:<li>Eficiencia</li><li>Eficacia</li><li>Efectividad</li>"><i class="far fa-question-circle"></i> Indicador de:</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndEfe') ? ' is-invalid' : '' }}" required="" name="IndEfe" id="IndEfe">
                  <option value="0">Eficiencia</option>
                  <option value="1">Eficacia</option>
                  <option value="2">Efectividad</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndEfe'])
              </div>
                <button type="submit" class="fas fa-arrow-circle-up btn btn-fill btn-success"> Actualizar</button>
          </form>
      </div>
  </div>
@endsection