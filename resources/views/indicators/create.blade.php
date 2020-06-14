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
  	  <h3 class="card-title"><strong>Creación de Indicadores</strong></h3>
  	</div>

      <div class="modal-body">
          <form role="form" method="POST" action="{{ route('indicators.store') }}" enctype="multipart/form-data">
            	@csrf
              <div class="form-group{{ $errors->has('IndName') ? ' has-danger' : '' }}">
                <label>Nombre</label>
                <input placeholder="Ausentismo e impuntualidad" maxlength="200" value="{{ old('IndName') }}" name="IndName" type="text" class="text-center form-control form-control-alternative{{ $errors->has('IndName') ? ' is-invalid' : '' }}" required>
                @include('alerts.feedback', ['field' => 'IndName'])
              </div>
              <div class="form-group{{ $errors->has('IndDescripcion') ? ' has-danger' : '' }}">
                <label>Descripción</label>
                <input placeholder="% de Ausencias de los trabajadores por faltas, permisos o retrasos en cada area de trabajo. Este indicador nos conduce a la motivación de los trabajadores y su compromiso con la Empresa." maxlength="800" value="{{ old('IndDescripcion') }}" name="IndDescripcion" type="text" class="text-center form-control form-control-alternative{{ $errors->has('IndDescripcion') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndDescripcion'])
              </div>
              <div class="form-group{{ $errors->has('IndFormula') ? ' has-danger' : '' }}">
                <label>Formula</label>
                <input placeholder="(Horas de ausentismo del mes / Horas laborados del mes)* 100" maxlength="200" value="{{ old('IndFormula') }}" name="IndFormula" type="text" class="text-center form-control form-control-alternative{{ $errors->has('IndFormula') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndFormula'])
              </div>
              <div class="form-group{{ $errors->has('IndFrecuencia') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Frecuencia del Indicador</b>" data-content="Seleccione la frecuencia del indicador"><i class="far fa-question-circle"></i> Frecuencia del Indicador</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndFrecuencia') ? ' is-invalid' : '' }}" required="" name="IndFrecuencia" id="IndFrecuencia">
                  <option value="">Seleccione la frecuencia con la que se mide el indicador</option>
                  <option {{ old('IndFrecuencia') == 'mensual' ? 'selected' : ''}} value="mensual">Mensual</option>
                  <option {{ old('IndFrecuencia') == 'trimestral' ? 'selected' : ''}}  value="trimestral">Trimestral</option>
                  <option {{ old('IndFrecuencia') == 'semestral' ? 'selected' : ''}}  value="semestral">Semestral</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndFrecuencia'])
              </div>
              <div class="form-group{{ $errors->has('IndObjective') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Objetivo del Indicador</b>" data-content="Seleccione el objetivo del indicador de acuerdo a los objetivos presentados en la sección de Nosotros <br><br><ul><li>Objetivo 1 - Pólitica de Seguridad y Salud en el Trabajo</li><li>Objetivo 2 - Pólitica de Calidad</li><li>Objetivo 3 - Pólitica Ambiental</li></ul><br><p>Ver sección <strong>Nosotros</strong> en la página de inicio de la intranet para más detalles sobre los objetivos corporativos"><i class="far fa-question-circle"></i> Objetivo del Indicador</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndObjective') ? ' is-invalid' : '' }}" required="" name="IndObjective" id="IndObjective">
                  <option value="">Seleccione el objetivo relacionado con el indicador</option>
                  <option  {{ old('IndObjective') == '1' ? 'selected' : ''}} value="1">Objetivo 1 - Pólitica de Seguridad y Salud en el Trabajo</option>
                  <option  {{ old('IndObjective') == '2' ? 'selected' : ''}} value="2">Objetivo 2 - Pólitica de Calidad</option>
                  <option  {{ old('IndObjective') == '3' ? 'selected' : ''}} value="3">Objetivo 3 - Pólitica Ambiental</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndObjective'])
              </div>
              <div class="form-group{{ $errors->has('IndMeta') ? ' has-danger' : '' }}">
                <label>Meta del Indicador</label>
                <input maxlength="12" value="{{ old('IndMeta') }}" placeholder=">90%" name="IndMeta" type="text" class="text-center form-control form-control-alternative{{ $errors->has('IndMeta') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndMeta'])
              </div>
              <div class="form-group{{ $errors->has('IndFicha') ? ' has-danger' : '' }}">
                <label>N° de ficha</label>
                <input maxlength="24" placeholder="HSEQ-04 REV.1 ene-20" value="{{ old('IndFicha') }}" name="IndFicha" type="text" class="text-center form-control form-control-alternative{{ $errors->has('IndFicha') ? ' is-invalid' : '' }}">
                @include('alerts.feedback', ['field' => 'IndFicha'])
              </div>		
              <div class="custom-input-file {{ $errors->has('IndGraphic') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Gráfica</b>" data-content="Ingresar la imagen correspondiente a la Gráfica. Este archivo debe ser de tipo: jpg, jpeg, png"><i class="far fa-question-circle"></i> Gráfica</label>
                <input id="IndGraphi" name="IndGraphic" type="file" class="form-control form-control-alternative{{ $errors->has('IndGraphic') ? ' is-invalid' : '' }}" required="">
                @include('alerts.feedback', ['field' => 'IndGraphic'])
                <img id="IndGraphiOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/>
              </div>
              <div class="custom-input-file {{ $errors->has('IndAnalysis') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Análisis (imagen)</b>" data-content="Ingresar el análisis realizado al indicador con respecto a su objetivo. Este archivo debe ser de tipo: jpg, jpeg, png."><i class="far fa-question-circle"></i> Análisis (imagen)</label>
                <input id="IndAnalysis" name="IndAnalysis" type="file" class="form-control form-control-alternative{{ $errors->has('IndAnalysis') ? ' is-invalid' : '' }}" required>
                @include('alerts.feedback', ['field' => 'IndAnalysis'])
                <img id="IndAnalysisOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/>
              </div>
              <div class="custom-input-file {{ $errors->has('IndTable') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tabla (Archivo)</b>" data-content="Adjuntar el archivo correspondiente a la gráfica. Este archivo debe estar en formato PDF, TXT, Word, Excel, PowerPoint"><i class="far fa-question-circle"></i> Archivo</label>
                <input name="IndTable" type="file" class="form-control form-control-alternative{{ $errors->has('IndTable') ? ' is-invalid' : '' }}" required>
                @include('alerts.feedback', ['field' => 'IndTable'])
              </div>
              <div class="form-group{{ $errors->has('IndType') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Tipo de Indicador</b>" data-content="Ingresar el tipo de indicador si es de tipo estrategico o general. <br><br><ul><li>Estrategico: Corresponde a los indicadores que se mostraran directamente a la gerencia general</li><li>Generales: Son los indicadores de uso interno en cada area y no se necesitan para la gestion estrategica de la empresa</li></ul>"><i class="far fa-question-circle"></i> Tipo de Indicador</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndType') ? ' is-invalid' : '' }}" required="" name="IndType" id="IndType">
                  <option {{ old('IndType') == '0' ? 'selected' : ''}} value="0">Estrategico</option>
                  <option {{ old('IndType') == '1' ? 'selected' : ''}} value="1">General</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndType'])
              </div>
              <div class="form-group{{ $errors->has('IndEfe') ? ' has-danger' : '' }}">
                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Indicador de:</b>" data-content="Seleccione el tipo de indicador:<li>Eficiencia</li><li>Eficacia</li><li>Efectividad</li>"><i class="far fa-question-circle"></i> Indicador de:</label>
                <select class="text-center form-control form-control-alternative{{ $errors->has('IndEfe') ? ' is-invalid' : '' }}" required="" name="IndEfe" id="IndEfe">
                  <option {{ old('IndEfe') == '0' ? 'selected' : ''}} value="0">Eficacia</option>
                  <option {{ old('IndEfe') == '1' ? 'selected' : ''}} value="1">Eficiencia</option>
                  <option {{ old('IndEfe') == '2' ? 'selected' : ''}} value="2">Efectividad</option>
                </select>
                @include('alerts.feedback', ['field' => 'IndEfe'])
              </div>
                <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
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