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
				<div class="col-md-2">
					<h2>
						<b>{{'Nuevo Proceso'}}</b>
					</h2>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Proveedores
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateProveedores">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditProveedores">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteProveedores">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Entradas
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateEntradas">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditEntradas">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteEntradas">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Actividades
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateActividades">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditActividades">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteActividad">Eliminar</a>
					  </div>
					</div>
				</div>
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Salidas
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateSalidas">Nueva</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditSalidas">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteSalidas">Eliminar</a>
					  </div>
					</div>
				</div>
				{{-- <div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Seguimientos
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateSeguimientos">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteSeguimientos">Eliminar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditSeguimientos">Actualizar</a>
					  </div>
					</div>
				</div> --}}
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Clientes
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateClientes">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditClientes">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteClientes">Eliminar</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
		@include('alerts.success')
		<form id="processForm" role="form" method="POST" action="{{ route('proceso.store') }}" enctype="multipart/form-data">
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

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRevVersion">Descripción del cambio</label>
			      		<input type="text" class="form-control" id="email" placeholder="descripcion del cambio" name="ProcChangesDescription">
			    	</div>
			    </div>

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
			    			{{-- @foreach($users as $user)
			    				<option value="{{$user->id}}">{{$user->name}}</option>
			    			@endforeach --}}
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
			    			{{-- @foreach($users as $user)
			    				<option value="{{$user->id}}">{{$user->name}}</option>
			    			@endforeach --}}
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
			    		<label class="input-label" for="ProcElaboro">Elaborado Por</label>
			      		<select id="ProcElaboro" class="form-control" name="ProcElaboro" placeholder="seleccione">
			    			@foreach($roles as $rol)
			    				<option value="{{$rol->id}}">{{$rol->name}}</option>
			    			@endforeach
			    			{{-- @foreach($users as $user)
			    				<option value="{{$user->id}}">{{$user->name}}</option>
			    			@endforeach --}}
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
			    			{{-- @foreach($users as $user)
			    				<option value="{{$user->id}}">{{$user->name}}</option>
			    			@endforeach --}}
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
			    			{{-- @foreach($users as $user)
			    				<option value="{{$user->id}}">{{$user->name}}</option>
			    			@endforeach --}}
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Seguimiento">Seguimiento</label>
			      		<select multiple id="Seguimiento" class="form-control" name="Seguimiento[]" placeholder="seleccione">
			    			@foreach($seguimientos as $seguimiento)
			    				<option value="{{$seguimiento->id}}">{{$seguimiento->SeguiName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>
				
				<div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="Clientes">Clientes</label>
			      		<select multiple id="Clientes" class="form-control" name="Clientes[]" placeholder="seleccione">
			    			@foreach($clientes as $cliente)
			    				<option value="{{$cliente->id}}">{{$cliente->CliName}}</option>
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
			    		<label class="input-label" for="Provedores">Provedores</label>
			      		<select multiple id="Provedores" class="form-control" name="Provedores[]" placeholder="seleccione">
			    			@foreach($proveedores as $proveedor)
			    				<option value="{{$proveedor->id}}">{{$proveedor->ProvName}}</option>
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
			    		<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
			      		<select multiple class="form-control" name="ProcRequsitos[]" placeholder="seleccione" id="ProcRequsitos">
			    			@foreach($requisitos as $requisito)
			    				<option value="{{$requisito->id}}">{{$requisito->ReqName}}</option>
			    			@endforeach
			    		</select>
			    	</div>
			    </div>

			    <div class="col-md-6 col-xs-12">
			    	<div class="form-group">
			    		<label class="input-label" for="ProcRequsitos">Fecha</label>
			      		<input type="date" name="ProcDate" class="form-control">
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
		</form> 
		<div class="card-footer">
			<button form="processForm" type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</div>




	{{-- Esta es la sección de los modal --}}

	{{-- Este modal corresponde a los Proveedores --}}
	
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateProveedores
		@endslot
		@slot('titulo')
			Nuevo Proveedor
		@endslot
		@slot('action')
			{{ route('proveedor.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre del proveedor</label>	      
				<input type="text" name="ProvName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent

	{{-- Este modal corresponde a los seguimientos --}}

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
			Nuevo Seguimiento
		@endslot
		@slot('action')
			{{ route('seguimiento.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre del seguimiento</label>	      
				<input type="text" name="SeguiName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent

	{{-- Este modal corresponde a los clientes --}}


	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateClientes
		@endslot
		@slot('titulo')
			Nuevo Cliente
		@endslot
		@slot('action')
			{{ route('cliente.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre del cliente</label>	      
				<input type="text" name="CliName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent


	{{-- Parte del documento donde se encuentran los modales de edición --}}


	
	{{-- Modal de edición de proveedores --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditProveedores
		@endslot
		@slot('titulo')
			Editar Proveedor
		@endslot
		@slot('action')
			{{ route('proveedor.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectProveedor" class="form-control" onchange="cambiarProveedorId()">
					@foreach($proveedores as $proveedor)
					<option value="{{$proveedor->id}}">{{$proveedor->ProvName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoProv" type="text" value="1" name="idocultoProv" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="ProvName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent


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

	{{-- Modal de edición de clientes --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditClientes
		@endslot
		@slot('titulo')
			Editar Cliente
		@endslot
		@slot('action')
			{{ route('cliente.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectCliente" class="form-control" onchange="cambiarClienteId()">
					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->CliName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoCli" type="text" value="1" name="idocultoCli" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="CliName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent


	{{-- Modal de eliminar proveedores --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteProveedores
		@endslot
		@slot('idform')
			formDeleteProveedores
		@endslot
		@slot('titulo')
			Eliminar Proveedores
			@endslot
		@slot('action')
			{{ route('proveedor.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarProveedores" class="form-control" onchange="eliminarProveedor()">
						<option value="0" selected>Seleccionar proveedor a Eliminar</option>
						@foreach($proveedoresDrop as $proveedorDrop)
						<option value="{{$proveedorDrop->id}}">{{$proveedorDrop->ProvName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteProveedores" disabled id="eliminarSubmitProveedores" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar Salidas --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteSalidas
		@endslot
		@slot('idform')
			formDeleteSalidas
		@endslot
		@slot('titulo')
			Eliminar Salidas
			@endslot
		@slot('action')
			{{ route('salida.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarSalidas" class="form-control" onchange="eliminarSalida()">
						<option value="0" selected>Seleccionar salida a Eliminar</option>
						@foreach($salidasDrop as $salidaDrop)
						<option value="{{$salidaDrop->id}}">{{$salidaDrop->OutputName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteSalidas" disabled id="eliminarSubmitSalidas" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent

	{{-- Modal de eliminar entradas --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteEntradas
		@endslot
		@slot('idform')
			formDeleteEntradas
		@endslot
		@slot('titulo')
			Eliminar Entradas
		@endslot
		@slot('action')
			{{ route('entrada.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarEntradas" class="form-control" onchange="eliminarEntrada()">
						<option value="0" selected>Seleccionar entrada a Eliminar</option>
						@foreach($entradasDrop as $entradaDrop)
						<option value="{{$entradaDrop->id}}">{{$entradaDrop->InputName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteEntradas" disabled id="eliminarSubmitEntradas" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent

	{{-- Modal de eliminar actividades --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteActividad
		@endslot
		@slot('idform')
			formDeleteActividad
		@endslot
		@slot('titulo')
			Eliminar Actividad
		@endslot
		@slot('action')
			{{ route('actividad.destroy', 0) }}
		@endslot
		@slot('form')
				@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarActividad" class="form-control" onchange="eliminarActividad()">
						<option value="0" selected>Seleccionar actividad a Eliminar</option>
						@foreach($actividadesDrop as $actividadDrop)
						<option value="{{$actividadDrop->id}}">{{$actividadDrop->ActiName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
			<button form="formDeleteActividad" disabled id="eliminarSubmitActividad" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent

	{{-- Modal de eliminar clientes --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteClientes
		@endslot
		@slot('idform')
			formDeleteClientes
		@endslot
		@slot('titulo')
			Eliminar Clientes
			@endslot
		@slot('action')
			{{ route('cliente.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarClientes" class="form-control" onchange="eliminarCliente()">
						<option value="0" selected>Seleccionar cliente a Eliminar</option>
						@foreach($clientesDrop as $clienteDrop)
						<option value="{{$clienteDrop->id}}">{{$clienteDrop->CliName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteClientes" disabled id="eliminarSubmitClientes" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
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
	
	{{-- Modal de eliminar seguimientos --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteSeguimientos
		@endslot
		@slot('idform')
			formDeleteSeguimientos
		@endslot
		@slot('titulo')
			Eliminar Seguimiento
		@endslot
		@slot('action')
			{{ route('seguimiento.destroy', 0) }}
		@endslot
		@slot('form')
				@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarSeguimiento" class="form-control" onchange="eliminarSeguimiento()">
						<option value="0" selected>Seleccionar seguimiento a Eliminar</option>
						@foreach($seguimientosDrop as $seguimientoDrop)
						<option value="{{$seguimientoDrop->id}}">{{$seguimientoDrop->SeguiName}}</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
			<button form="formDeleteSeguimientos" disabled id="eliminarSubmitSeguimiento" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
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

	function cambiarClienteId(){
		var id = $('#IdSelectCliente').val();
		var inputoculto = $('#idocultoCli');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarProveedorId(){
		var id = $('#IdSelectProveedor').val();
		var inputoculto = $('#idocultoProv');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarEntradaId(){
		var id = $('#IdSelectEntrada').val();
		var inputoculto = $('#idoculto');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function eliminarSalida(){
		let formulario = $('#formDeleteSalidas');
		let botonsubmit = $('#eliminarSubmitSalidas');
		var id = $('#SelectEliminarSalidas').val();
		formulario.attr('action', '{{ url('salida') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarCliente(){
		let formulario = $('#formDeleteClientes');
		let botonsubmit = $('#eliminarSubmitClientes');
		var id = $('#SelectEliminarClientes').val();
		formulario.attr('action', '{{ url('cliente') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};


	function eliminarProveedor(){
		let formulario = $('#formDeleteProveedores');
		let botonsubmit = $('#eliminarSubmitProveedores');
		var id = $('#SelectEliminarProveedores').val();
		formulario.attr('action', '{{ url('proveedor') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarActividad(){
		let formulario = $('#formDeleteActividad');
		let botonsubmit = $('#eliminarSubmitActividad');
		var id = $('#SelectEliminarActividad').val();
		formulario.attr('action', '{{ url('actividad') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarEntrada(){
		let formulario = $('#formDeleteEntradas');
		let botonsubmit = $('#eliminarSubmitEntradas');
		var id = $('#SelectEliminarEntradas').val();
		formulario.attr('action', '{{ url('entrada') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarSeguimiento(){
		let formulario = $('#formDeleteSeguimientos');
		let botonsubmit = $('#eliminarSubmitSeguimiento');
		var id = $('#SelectEliminarSeguimiento').val();
		formulario.attr('action', '{{ url('seguimiento') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};
</script>
<script>
	$(document).ready( function(){
		$('option:selected').each(function(){ $(this).prop('selected',true); });
	})
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