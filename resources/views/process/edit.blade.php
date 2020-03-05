@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Procesos
@endsection

@push('css')
        {{-- <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
        <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/> --}}
@endpush

@section('content')
	{{-- contenido de la pagina --}}
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-4">
					<h2>
						<b>{{'Editar Proceso'}}</b>
					</h2>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Entradas
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateEntradas">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditEntradas">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#ModalSalidas">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Actividades
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateActividades">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditActividades">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#ModalSalidas">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Salidas
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateSalidas">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditSalidas">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#ModalSalidas">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Seguimientos
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateSeguimientos">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditSeguimientos">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#ModalSalidas">Eliminar</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
			 <form role="form" method="POST" action="{{ route('proceso.update', $proceso) }}" enctype="multipart/form-data">
			 @csrf
			 @method('PUT')
			<div class="card-body">
			  <div class="row">
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcName">Nombre del Proceso</label>
			      		<input type="text" value="{{$proceso->ProcName}}" class="form-control" id="ProcName" placeholder="Compras" name="ProcName">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRevVersion">N° de Revisión</label>
			      		<input type="text" value="{{$proceso->ProcRevVersion}}" class="form-control" id="ProcRevVersion" placeholder="N° de Revisión" name="ProcRevVersion">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRevVersion">Descripción del cambio</label>
			      		<input type="text" class="form-control" id="email" placeholder="descripcion del cambio" name="ProcChangesDescription" value="{{$proceso->ProcChangesDescription}}">
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="custom-input-file">
			    		<label class="input-label" for="ProcImage">Imagen de referencia</label>
			      		<input type="file" value="{{$proceso->ProcImage}}" class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcResponsable">Responsable del Proceso</label>
			    		<select id="ProcResponsable" required class="form-control" name="ProcResponsable" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAutoridad">Autoridad del Proceso</label>
			    		<select id="ProcAutoridad" required class="form-control" name="ProcAutoridad" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRecursos">Recursos Necesarios</label>
			      		<input type="text" value="{{$proceso->ProcRecursos}}" class="form-control" id="ProcRecursos" placeholder="Vehiculo; Computador; Celular; Papel carta; etc..." name="ProcRecursos">
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Seguimiento">Seguimiento</label>
			    		{{-- <input type="text" class="form-control" id="Seguimiento" placeholder="lista de controles, auditorias, seguimientos, etc..." name="Seguimiento"> --}}
			      		<select multiple id="Seguimiento" class="form-control" name="Seguimiento[]" placeholder="seleccione">
			    			@foreach($seguimientos as $seguimiento)
			    				<option 
			    				@foreach($proceso->seguimientos as $seguiSelect)
			    				@if($seguiSelect->id == $seguimiento->id)
			    				selected
			    				@endif
			    				@endforeach 
			    				value="{{$seguimiento->id}}">{{$seguimiento->SeguiName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcElaboro">Elaborado Por</label>
			      		<select id="ProcElaboro" required class="form-control" name="ProcElaboro" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>
			    
			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcReviso">Revisado Por</label>
			      		<select id="ProcReviso" required class="form-control" name="ProcReviso" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcAprobo">Aprobado Por</label>
			      		<select id="ProcAprobo" required class="form-control" name="ProcAprobo" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Entradas">Entradas</label>
			      		<select multiple id="Entradas" required class="form-control" name="Entradas[]" placeholder="seleccione">
			    			@foreach($entradas as $entrada)
			    				<option 
			    				@foreach($proceso->entradas as $entradaSelect)
			    				@if($entradaSelect->id == $entrada->id)
			    				selected
			    				@endif
			    				@endforeach
			    				value="{{$entrada->id}}">{{$entrada->InputName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Actividades">Actividades</label>
			      		<select multiple id="Actividades" required class="form-control" name="Actividades[]" placeholder="seleccione">
			    			@foreach($actividades as $actividade)
			    				<option 
			    				@foreach($proceso->actividades as $actiSelect)
			    				@if($actiSelect->id == $actividade->id)
			    				selected
			    				@endif
			    				@endforeach
			    				value="{{$actividade->id}}">{{$actividade->ActiName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Salidas">Salidas</label>
			      		<select multiple id="Salidas" required class="form-control" name="Salidas[]" placeholder="seleccione">
			    			@foreach($salidas as $salida)
			    				<option 
			    				{{-- @foreach($proceso->salidas == $salidaSelect)
			    				@if($salidaSelect->id == $salida->id)
			    				selected
			    				@endif
			    				@endforeach --}}
			    				value="{{$salida->id}}">{{$salida->OutputName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Indicadores">Indicadores</label>
			      		<select multiple id="Indicadores" required class="form-control" name="Indicadores[]" placeholder="seleccione">
			    			@foreach($indicadores as $indicador)
			    				<option 
			    				@foreach($proceso->indicadores as $indiSelect)
			    				@if($indiSelect->id == $indicador->id)
			    				selected
			    				@endif
			    				@endforeach 
			    				value="{{$indicador->id}}">{{$indicador->IndName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>


			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Soporte">Procesos de Soporte</label>
			      		<select multiple id="Soporte" required class="form-control" name="Soporte[]" placeholder="seleccione">
			    			@foreach($soportes as $soporte)
			    				<option 
			    				{{-- @foreach($proceso->soportes as $sopoSelect)
			    				@if($sopoSelect->id == $soporte->id)
			    				selected 
			    				@endif
			    				@endforeach --}}
			    				value="{{$soporte->id}}">{{$soporte->ProcName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Docs">Documentación aplicable</label>
			      		<select multiple id="Docs" required class="form-control" name="Docs[]" placeholder="seleccione">
			    			@foreach($documentos as $documento)
			    				<option 
			    				@foreach($proceso->documentos as $docuSelect)
			    				@if($docuSelect->id == $documento->id)
			    				selected 
			    				@endif
			    				@endforeach
			    				value="{{$documento->id}}">{{$documento->DocName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Areas">Areas Que participan</label>
			      		<select multiple id="Areas" required class="form-control" name="Areas[]" placeholder="seleccione">
			    			@foreach($areas as $area)
			    				<option 
			    				@foreach($proceso->areas as $areaSelect)
			    				@if($areaSelect->id == $area->id)
			    				selected 
			    				@endif
			    				@endforeach
			    				value="{{$area->id}}">{{$area->AreaName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
			      		<select multiple class="form-control" required name="ProcRequsitos[]" placeholder="seleccione" id="ProcRequsitos">
			    			@foreach($requisitos as $requisito)
			    				<option 
			    				@foreach($proceso->requisitos as $requiSelect)
			    				@if($requiSelect->id == $requisito->id)
			    				selected 
			    				@endif
			    				@endforeach
			    				value="{{$requisito->id}}">{{$requisito->ReqName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRequsitos">Fecha</label>
			      		<input type="date" name="ProcDate" class="form-control" value="{{$proceso->ProcDate}}">
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




	{{-- Esta es la sección de los modal --}}

	{{-- Este modal corresponde a las entradas --}}
	<div class="modal fade" id="ModalEntradas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Agregar Entrada</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form role="form" method="POST" action="{{ route('entrada.store')}}" enctype="multipart/form-data">
	       		@csrf
	       		<div class="form-group">
	       			<label>Nombre de la entrada</label>
	       			<input type="text" name="InputName" class="text-center form-control" required="">
	       		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="fas fa-plus btn btn-fill btn-success"> Crear</button>
	       	</form>
	      </div>
	    </div>
	  </div>
	</div>


	{{-- Este modal corresponde a las actividades --}}

	<div class="modal fade" id="ModalActividades" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form role="form" method="POST" action="{{ route('actividad.store')}}" enctype="multipart/form-data">
	       		@csrf
	       		<div class="form-group">
	       			<label>Nombre de la actividad</label>	      
	       			<input type="text" name="ActiName" class="text-center form-control" required="">
	       		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="fas fa-plus btn btn-fill btn-success"> Crear</button>
	       	</form>
	      </div>
	    </div>
	  </div>
	</div>


	{{-- Este modal corresponde a las Salidas --}}

	<div class="modal fade" id="ModalSalidas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Agregar Salida</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	<form role="form" method="POST" action="{{ route('salida.store')}}" enctype="multipart/form-data">
	       		@csrf
	       		<div class="form-group">
	       			<label>Nombre de la salida</label>	      
	       			<input type="text" name="OutputName" class="text-center form-control" required="">
	       		</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="fas fa-plus btn btn-fill btn-success"> Crear</button>
	       	</form>
	      </div>
	    </div>
	  </div>
	</div>







		{{-- Esta es la sección de los modal --}}

		@component('layouts.partials.modalCreate')
			@slot('idModal')
				modalCreateEntradas
			@endslot
			@slot('titulo')
				Nueva Entrada
			@endslot
			@slot('action')
				{{ route('entrada.store')}}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<label>Nombre de la entrada</label>	      
					<input type="text" name="InputName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent


		{{-- Este modal corresponde a las actividades --}}

		@component('layouts.partials.modalCreate')
			@slot('idModal')
				modalCreateActividades
			@endslot
			@slot('titulo')
				Nueva Actividad
			@endslot
			@slot('action')
				{{ route('actividad.store')}}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<label>Nombre de la actividad</label>	      
					<input type="text" name="ActiName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent


		{{-- Este modal corresponde a las Salidas --}}

		@component('layouts.partials.modalCreate')
			@slot('idModal')
				modalCreateSalidas
			@endslot
			@slot('titulo')
				Nueva Salida
			@endslot
			@slot('action')
				{{ route('salida.store')}}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<label>Nombre de la salida</label>	      
					<input type="text" name="OutputName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent

		{{-- Este modal corresponde a los seguimientos --}}

		@component('layouts.partials.modalCreate')
			@slot('idModal')
				modalCreateSeguimientos
			@endslot
			@slot('titulo')
				Nueva Seguimiento
			@endslot
			@slot('action')
				{{ route('seguimiento.store')}}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<label>Nombre de la salida</label>	      
					<input type="text" name="SeguiName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent


		{{-- Parte del documento donde se encuentran los modales de edición --}}

		{{-- Modal de edición de Entradas --}}
		@component('layouts.partials.modalEdit')
			@slot('idModal')
				modalEditEntradas
			@endslot
			@slot('titulo')
				Editar Entrada
			@endslot
			@slot('action')
				{{ route('entrada.actualizar') }}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<select id="IdSelectEntrada" class="form-control" onchange="cambiarEntradaId()">
						@foreach($entradas as $entrada)
						<option value="{{$entrada->id}}">{{$entrada->InputName}}</option>
						@endforeach
					</select>
				</div>
				<input id="idoculto" type="text" value="1" name="idoculto" style="display:none;">
				<div class="form-group">
					<label>Nuevo Nombre</label>
					<input type="text" name="InputName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent



		{{-- Modal de edición de Actividades --}}
		@component('layouts.partials.modalEdit')
			@slot('idModal')
				modalEditActividades
			@endslot
			@slot('titulo')
				Editar Actividad
			@endslot
			@slot('action')
				{{ route('actividad.actualizar') }}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<select id="IdSelectActividad" class="form-control" onchange="cambiarActividadId()">
						@foreach($actividades as $actividad)
							<option value="{{$actividad->id}}">{{$actividad->ActiName}}</option>
						@endforeach
					</select>
				</div>
				<input id="idocultoActi" type="text" value="1" name="idocultoActi" style="display:none;">
				<div class="form-group">
					<label>Nuevo Nombre</label>
					<input type="text" name="ActiName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent




		{{-- Modal de edición de Salidas --}}
		@component('layouts.partials.modalEdit')
			@slot('idModal')
				modalEditSalidas
			@endslot
			@slot('titulo')
				Editar Salidas
			@endslot
			@slot('action')
				{{ route('salida.actualizar') }}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<select id="IdSelectSalida" class="form-control" onchange="cambiarSalidaId()">
						@foreach($salidas as $salida)
							<option value="{{$salida->id}}">{{$salida->OutputName}}</option>
						@endforeach
					</select>
				</div>
				<input id="idocultoSali" type="text" value="1" name="idocultoSali" style="display:none;">
				<div class="form-group">
					<label>Nuevo Nombre</label>
					<input type="text" name="OutputName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent



		{{-- Modal de edición de Seguimientos --}}
		@component('layouts.partials.modalEdit')
			@slot('idModal')
				modalEditSeguimientos
			@endslot
			@slot('titulo')
				Editar Seguimiento
			@endslot
			@slot('action')
				{{ route('seguimiento.actualizar') }}
			@endslot
			@slot('form')
				@csrf
				<div class="form-group">
					<select id="IdSelectSeguimiento" class="form-control" onchange="cambiarSeguimientoId()">
						@foreach($seguimientos as $seguimiento)
							<option value="{{$seguimiento->id}}">{{$seguimiento->SeguiName}}</option>
						@endforeach
					</select>
				</div>
				<input id="idocultoSegui" type="text" value="1" name="idocultoSegui" style="display:none;">
				<div class="form-group">
					<label>Nuevo Nombre</label>
					<input type="text" name="SeguiName" class="text-center form-control" required="">
				</div>
			@endslot
		@endcomponent 

@endsection


{{-- librerias adicionales para el funcionmiento de la vista --}}
@push('js')
	{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>
	function cambiarEntradaId(){
		var id = $('#IdSelectEntrada').val();
		var inputoculto = $('#idoculto');
			inputoculto.attr('value', id);
			console.log(id);
	};

	function cambiarActividadId(){
		var id = $('#IdSelectActividad').val();
		var inputoculto = $('#idocultoActi');
			inputoculto.attr('value', id);
			console.log(id);
	};

	function cambiarSalidaId(){
		var id = $('#IdSelectSalida').val();
		var inputoculto = $('#idocultoSali');
			inputoculto.attr('value', id);
			console.log(id);
	};

	function cambiarSeguimientoId(){
		var id = $('#IdSelectSeguimiento').val();
		var inputoculto = $('#idocultoSegui');
			inputoculto.attr('value', id);
			console.log(id);
	};
</script>
@endpush
