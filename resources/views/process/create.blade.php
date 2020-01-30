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
			      		<input type="text" class="form-control" id="ProcName" placeholder="Compras" name="ProcName">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRevVersion">N° de Revisión</label>
			      		<input type="text" class="form-control" id="ProcRevVersion" placeholder="N° de Revisión" name="ProcRevVersion">
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
			      		<input type="file" class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
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

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcResponsable">Responsable del Proceso</label>
			    		<select id="ProcResponsable" class="form-control" name="ProcResponsable" placeholder="Responsable" id="ProcResponsable">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAutoridad">Autoridad del Proceso</label>
			    		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRecursos">Recursos Necesarios</label>
			      		<input type="text" class="form-control" id="ProcRecursos" placeholder="Vehiculo; Computador; Celular; Papel carta; etc..." name="ProcRecursos">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
			      		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcElaboro">Elaborado Por</label>
			      		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>
			    
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcReviso">Revisado Por</label>
			      		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAprobo">Aprobado Por</label>
			      		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
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