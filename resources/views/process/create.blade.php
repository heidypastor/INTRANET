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
			      		<input type="text" class="form-control" id="ProcRevVersion" placeholder="N° de Revisión" name="ProcRevVersion">
			    	</div>
			    </div>

			    {{-- <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="email" placeholder="descripcion del cambio" name="ProcChangesDescription">
			    	</div>
			    </div> --}}

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="file" class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		 <textarea class="form-control" id="ProcObjetivo" name="ProcObjetivo">
			      		Objetivo del PRoceso
			      		</textarea> 
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<select id="ProcResponsable" class="form-control" name="ProcResponsable" placeholder="Responsable" id="ProcResponsable">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<select id="ProcAutoridad" class="form-control" name="ProcAutoridad" placeholder="Autoridad" id="ProcAutoridad">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="ProcRecursos" placeholder="Recursos Necesarios" name="ProcRecursos">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="ProcRequsitos" placeholder="Requisitos por cumplir" name="ProcRequsitos">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="ProcElaboro" placeholder="Elaborado Por" name="ProcElaboro">
			    	</div>
			    </div>
			    
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="ProcReviso" placeholder="Revisado Por" name="ProcReviso">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			      		<input type="text" class="form-control" id="ProcAprobo" placeholder="Aprobado Por" name="ProcAprobo">
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