@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
titulo de la pagina
@endsection

@push('css')
        {{-- <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
        <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/> --}}
@endpush

@section('content')
	{{-- contenido de la pagina --}}
	<div class="card">
		<div class="card-header">
			<h2>
				<b>{{'Nuevo Proceso'}}</b>
			</h2>
		</div>
			 <form role="form" method="POST" action="{{ route('proceso.store') }}" enctype="multipart/form-data">
			 @csrf
			<div class="card-body">
			  <div class="row">
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcName">Nombre del Proceso</label>
			      		<input type="text" required class="form-control" id="ProcName" placeholder="Compras" name="ProcName">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRevVersion">N° de Revisión</label>
			      		<input type="text" required class="form-control" id="ProcRevVersion" placeholder="N° de Revisión" name="ProcRevVersion">
			    	</div>
			    </div>

			    {{-- <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="email" placeholder="descripcion del cambio" name="ProcChangesDescription">
			    	</div>
			    </div> --}}

			    <div class="col-md-6 col-xs-12">
			    	<div class="custom-input-file">
			    		<label class="input-label" for="ProcImage">Imagen de referencia</label>
			      		<input type="file" required class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcResponsable">Responsable del Proceso</label>
			    		<select id="ProcResponsable" class="form-control" name="ProcResponsable" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAutoridad">Autoridad del Proceso</label>
			    		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRecursos">Recursos Necesarios</label>
			      		<input type="text" required class="form-control" id="ProcRecursos" placeholder="Vehiculo; Computador; Celular; Papel carta; etc..." name="ProcRecursos">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
			      		<select class="form-control" name="ProcRequsitos" placeholder="seleccione" id="ProcRequsitos">
			    			@foreach($requisitos as $requisito)
			    				<option value="{{$requisito->id}}">{{$requisito->ReqName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcElaboro">Elaborado Por</label>
			      		<select id="ProcElaboro" class="form-control" name="ProcElaboro" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>
			    
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcReviso">Revisado Por</label>
			      		<select id="ProcReviso" class="form-control" name="ProcReviso" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAprobo">Aprobado Por</label>
			      		<select id="ProcAprobo" class="form-control" name="ProcAprobo" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Entradas">Entradas</label>
			      		<select multiple id="Entradas" class="form-control" name="Entradas[]" placeholder="seleccione">
			    			@foreach($entradas as $entrada)
			    				<option value="{{$entrada->id}}">{{$entrada->InputName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Actividades">Actividades</label>
			      		<select multiple id="Actividades" class="form-control" name="Actividades[]" placeholder="seleccione">
			    			@foreach($actividades as $actividade)
			    				<option value="{{$actividade->id}}">{{$actividade->ActiName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Salidas">Salidas</label>
			      		<select multiple id="Salidas" class="form-control" name="Salidas[]" placeholder="seleccione">
			    			@foreach($salidas as $salida)
			    				<option value="{{$salida->id}}">{{$salida->OutputName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Indicadores">Indicadores</label>
			      		<select multiple id="Indicadores" class="form-control" name="Indicadores[]" placeholder="seleccione">
			    			@foreach($indicadores as $indicador)
			    				<option value="{{$indicador->id}}">{{$indicador->IndName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Seguimiento">Seguimiento</label>
			    		<input type="text" required class="form-control" id="Seguimiento" placeholder="lista de controles, auditorias, seguimientos, etc..." name="Seguimiento">
			      		{{-- <select multiple id="Seguimiento" class="form-control" name="Seguimiento[]" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select> --}}
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Soporte">Procesos de Soporte</label>
			      		<select multiple id="Soporte" class="form-control" name="Soporte[]" placeholder="seleccione">
			    			@foreach($soportes as $soporte)
			    				<option value="{{$soporte->id}}">{{$soporte->ProcName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Docs">Documentación aplicable</label>
			      		<select multiple id="Docs" class="form-control" name="Docs[]" placeholder="seleccione">
			    			@foreach($documentos as $documento)
			    				<option value="{{$documento->id}}">{{$documento->DocName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Areas">Areas Que participan</label>
			      		<select multiple id="Areas" class="form-control" name="Areas[]" placeholder="seleccione">
			    			@foreach($areas as $area)
			    				<option value="{{$area->id}}">{{$area->AreaName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcObjetivo">Objetivo del Proceso</label>
			      		 <textarea class="form-control" id="ProcObjetivo" name="ProcObjetivo">
			      		Objetivo de ejemplo para el proceso de compras
			      		</textarea> 
			    	</div>
			    </div>

			</div>
		</div>
		<div class="card-footer">
			   <button type="submit" class="btn btn-success">Enviar</button>
		</div>
		</form> 
	</div>
@endsection




{{-- librerias adicionales para el funcionmiento de la vista --}}
@push('js')
	{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
	// $(document).ready(function() {
	// 	console.log('vista cargada correctamente')
	// });
</script>
@endpush