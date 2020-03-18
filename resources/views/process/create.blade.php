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
			<div class="row">
				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Recursos
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateRecursos">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditRecursos">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteRecursos">Eliminar</a>
					  </div>
					</div>
				</div>

				<div class="col-md-3 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Gestión Ambiental
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGambiental">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditGambiental">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGambiental">Eliminar</a>
					  </div>
					</div>
				</div>

				<div class="col-md-2 float-right">
					<div class="dropdown">
					  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    Gestión de SST
					  </button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGseguridad">Nuevo</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditGseguridad">Actualizar</a>
					    <a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGseguridad">Eliminar</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
		@include('alerts.success')
		<form id="processForm" role="form" method="POST" action="{{ route('proceso.store') }}" enctype="multipart/form-data">
			 @csrf
			<div class="card-body">
				<div class="form-row">
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
				</div>
				
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAmbienTrabajo">Ambiente de Trabajo</label>
							<textarea class="form-control" id="ProcAmbienTrabajo" name="ProcAmbienTrabajo">
								Ambiente de Trabajo de ejemplo maximo 500 caracteres
							</textarea> 
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="custom-input-file">
							<label class="input-label" for="ProcImage">Imagen de referencia</label>
							<input type="file" required class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcResponsable">Responsable del Proceso</label>
							<select id="ProcResponsable" class="form-control" name="ProcResponsable[]" placeholder="seleccione" multiple>
								@foreach($roles as $rol)
									<option value="{{$rol->name}}">{{$rol->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
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

					{{-- <div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRecursos">Recursos Necesarios</label>
							<input type="text" required class="form-control" id="ProcRecursos" placeholder="Vehiculo; Computador; Celular; Papel carta; etc..." name="ProcRecursos">
						</div>
					</div> --}}
				</div>
					
				<div class="form-row">
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
				</div>

				<div class="form-row">
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
							<label class="input-label" for="Clientes">Clientes</label>
							<select multiple id="Clientes" class="form-control" name="Clientes[]" placeholder="seleccione">
								@foreach($clientes as $cliente)
									<option value="{{$cliente->id}}">{{$cliente->CliName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
					
				<div class="form-row">
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
								@foreach($actividades as $actividad)
									<option value="{{$actividad->id}}">{{$actividad->ActiName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
					
				<div class="form-row">
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
				</div>
					
				<div class="form-row">
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
				</div>
					
				<div class="form-row">
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
				</div>
					
				<div class="form-row">
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
				</div>
					
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcObjetivo">Alcance del Proceso</label>
							<textarea class="form-control" id="ProcObjetivo" name="ProcObjetivo">
							Objetivo de ejemplo para el proceso de compras
							</textarea> 
						</div>
					</div>
					
					{{-- <div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAlcance">Alcance del Proceso</label>
							<input type="text" required class="form-control" id="ProcAlcance" placeholder="Compras" name="ProcAlcance" max="500">
						</div>
					</div> --}}
				</div>
					
				<div class="form-row" id="containerDePoliticas">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAmbienTrabajo">Ambiente de trabajo</label>
							<input type="text" required class="form-control" id="ProcAmbienTrabajo" placeholder="Compras" name="ProcAmbienTrabajo" max="500">
						</div>
					</div>

					{{-- Div correspondiente a Póliticas de Operación --}}

					{{-- <div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcPolitOperacion[]">Politica de Operación</label>
							<div class="input-group">
								<input type="text" required id="ProcPolitOperacion" name="ProcPolitOperacion[]" class="form-control" placeholder="Politica de Operación" aria-label="Politica de Operación" aria-describedby="button-addon2">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2">Borrar</button>
								</div>
							</div>
						</div>
					</div> --}}
				</div>

				<div class="form-row">
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
							<label class="input-label" for="Recursos">Recursos</label>
							  <select multiple id="Recursos" class="form-control" name="Recursos[]" placeholder="seleccione">
								@foreach($recursos as $recurso)
									<option value="{{$recurso->id}}">{{$recurso->RecName}} - 
										@switch($recurso->RecType)
											@case(0)
												Fisico
												@break
											@case(1)
												Humano
												@break
											@case(2)
												Financiero
												@break
										@endswitch
									</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gambiental">Gestión Ambiental</label>
							  <select multiple id="Gambiental" class="form-control" name="Gambiental[]" placeholder="seleccione">
								@foreach($gambientales as $gambiental)
									<option value="{{$gambiental->id}}">{{$gambiental->GesName}} - 
										@switch($gambiental->GesType)
											@case(0)
												Aspectos Ambientales
												@break
											@case(1)
												Impactos Ambientales
												@break
											@case(2)
												Controles Operacionales
												@break
										@endswitch
									</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gseguridad">Gestión de Seguridad y Salud en el Trabajo</label>
							  <select multiple id="Gseguridad" class="form-control" name="Gseguridad[]" placeholder="seleccione">
								@foreach($gseguridades as $gseguridad)
									<option value="{{$gseguridad->id}}">{{$gseguridad->SeguName}} - 
										@switch($gseguridad->SeguType)
											@case(0)
												Peligros
												@break
											@case(1)
												Riesgos
												@break
											@case(2)
												Controles Operacionales
												@break
										@endswitch
									</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

	    

				<div class="form-row">
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
				</div>
            	

				<div class="form-row">
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
		</form> 
		<div class="card-footer">
			<button form="processForm" type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</div>




	{{-- Esta es la sección de los modal --}}


	{{-- Este modal corresponde a los Gestión de seguridad y salud en el trabajo--}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateGseguridad
		@endslot
		@slot('titulo')
			Nueva Gestión de Seguridad y Salud en el Trabajo
		@endslot
		@slot('action')
			{{ route('gseguridad.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre de la Gestión de SST</label>	      
				<input type="text" name="SeguName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Gestión SST</label>
				<select name="SeguType" class="text-center form-control" required="">
					<option value="0">Peligros</option>
					<option value="1">Riesgos</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Este modal corresponde a la Gestión ambiental --}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateGambiental
		@endslot
		@slot('titulo')
			Nueva Gestión Ambiental
		@endslot
		@slot('action')
			{{ route('gambiental.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre de la Gestión Ambiental</label>	      
				<input type="text" name="GesName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Gestión Ambiental</label>
				<select name="GesType" class="text-center form-control" required="">
					<option value="0">Aspectos Ambientales</option>
					<option value="1">Impactos Ambientales</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Este modal corresponde a los Recursos --}}
	@component('layouts.partials.modalCreate')
		@slot('idModal')
			modalCreateRecursos
		@endslot
		@slot('titulo')
			Nuevo Recurso
		@endslot
		@slot('action')
			{{ route('recursos.store')}}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<label>Nombre del Recurso</label>	      
				<input type="text" name="RecName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Tipo de Recurso</label>	      
				<select name="RecType" class="text-center form-control" required="">
					<option value="0">Fisico</option>
					<option value="1">Humano</option>
					<option value="2">Financiero</option>
				</select>
			</div>
		@endslot
	@endcomponent


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


	{{-- Parte del documento donde se encuentran los modales de EDIT --}}



	{{-- Modal de edición de Gestión de Seguridad y Salud en el Trabajo --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditGseguridad
		@endslot
		@slot('titulo')
			Editar Gestión de Seguridad y Salud en el Trabajo
		@endslot
		@slot('action')
			{{ route('gseguridad.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectGseguridad" class="form-control" onchange="cambiarGseguridadId()">
					@foreach($gseguridades as $gseguridad)
						<option value="{{$gseguridad->id}}">{{$gseguridad->SeguName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoGsegu" type="text" value="
			@foreach($gseguridades as $gseguridad)
				@if($loop->first)
					{{$gseguridad->id}}
				@endif
			@endforeach
			" name="idocultoGsegu" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="SeguName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="SeguType" class="text-center form-control" required="">
					<option value="0">Peligros</option>
					<option value="1">Riesgos</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Modal de edición de Gestión Ambiental --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditGambiental
		@endslot
		@slot('titulo')
			Editar Gestión Ambiental
		@endslot
		@slot('action')
			{{ route('gambiental.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectGambiental" class="form-control" onchange="cambiarGambientalId()">
					@foreach($gambientales as $gambiental)
						<option value="{{$gambiental->id}}">{{$gambiental->GesName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoGambi" type="text" value="
			@foreach($gambientales as $gambiental)
				@if($loop->first)
					{{$gambiental->id}}
				@endif
			@endforeach
			" name="idocultoGambi" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="GesName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="GesType" class="text-center form-control" required="">
					<option value="0">Aspectos Ambientales</option>
					<option value="1">Impactos Ambientales</option>
					<option value="2">Controles Operacionales</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Modal de edición de Recursos --}}
	@component('layouts.partials.modalEdit')
		@slot('idModal')
			modalEditRecursos
		@endslot
		@slot('titulo')
			Editar Recurso
		@endslot
		@slot('action')
			{{ route('recursos.actualizar') }}
		@endslot
		@slot('form')
			@csrf
			<div class="form-group">
				<select id="IdSelectRecurso" class="form-control" onchange="cambiarRecursoId()">
					@foreach($recursos as $recurso)
					<option value="{{$recurso->id}}">{{$recurso->RecName}}</option>
					@endforeach
				</select>
			</div>
			<input id="idocultoRec" type="text" value="
			@foreach($recursos as $recurso)
				@if($loop->first)
					{{$recurso->id}}
				@endif
			@endforeach
			" name="idocultoRec" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="RecName" class="text-center form-control" required="">
			</div>
			<div class="form-group">
				<label>Nuevo Tipo</label>
				<select name="RecType" class="text-center form-control" required="">
					<option value="0">Fisico</option>
					<option value="1">Humano</option>
					<option value="2">Financiero</option>
				</select>
			</div>
		@endslot
	@endcomponent

	
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
			<input id="idocultoProv" type="text" value="
			@foreach($proveedores as $proveedor)
				@if($loop->first)
					{{$proveedor->id}}
				@endif
			@endforeach
			" name="idocultoProv" style="display:none;">
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
			<input id="idoculto" type="text" value="
			@foreach($entradas as $entrada)
				@if($loop->first)
					{{$entrada->id}}
				@endif
			@endforeach
			" name="idoculto" style="display:none;">
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
			<input id="idocultoActi" type="text" value="
			@foreach($actividades as $actividad)
				@if($loop->first)
					{{$actividad->id}}
				@endif
			@endforeach
			" name="idocultoActi" style="display:none;">
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
			<input id="idocultoSali" type="text" value="
			@foreach($salidas as $salida)
				@if($loop->first)
					{{$salida->id}}
				@endif
			@endforeach
			" name="idocultoSali" style="display:none;">
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
			<input id="idocultoCli" type="text" value="
			@foreach($clientes as $cliente)
				@if($loop->first)
					{{$cliente->id}}
				@endif
			@endforeach
			" name="idocultoCli" style="display:none;">
			<div class="form-group">
				<label>Nuevo Nombre</label>
				<input type="text" name="CliName" class="text-center form-control" required="">
			</div>
		@endslot
	@endcomponent


	{{-- Sección de modales de DELETE --}}

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
			{{ route('gambiental.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarProveedores" class="form-control" onchange="eliminarProveedor()">
						<option value="0" selected>Seleccionar proveedor a Eliminar</option>
						@foreach($proveedoresDrop as $proveedorDrop)
						<option value="{{$proveedorDrop->id}}">{{$proveedorDrop->ProvName}}
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteProveedores" disabled id="eliminarSubmitProveedores" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar recursos --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteRecursos
		@endslot
		@slot('idform')
			formDeleteRecursos
		@endslot
		@slot('titulo')
			Eliminar Recurso
			@endslot
		@slot('action')
			{{ route('recursos.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarRecursos" class="form-control" onchange="eliminarRecurso()">
						<option value="0" selected>Seleccionar recurso a Eliminar</option>
						@foreach($recursosDrop as $recursoDrop)
						<option value="{{$recursoDrop->id}}">{{$recursoDrop->RecName}}
							@switch($recursoDrop->RecType)
								@case(0)
								Fisico
								@case(1)
								Humano
								@case(2)
								Financiero
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteRecursos" disabled id="eliminarSubmitRecursos" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar gestión de seguridad y salud en el trabajo --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteGseguridad
		@endslot
		@slot('idform')
			formDeleteGseguridades
		@endslot
		@slot('titulo')
			Eliminar Gestión de Seguridad y Salud en el Trabajo
			@endslot
		@slot('action')
			{{ route('gseguridad.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarGsegu" class="form-control" onchange="eliminarGseguridad()">
						<option value="0" selected>Seleccionar Gestión de SST a Eliminar</option>
						@foreach($gseguridadesDrop as $gseguridadDrop)
						<option value="{{$gseguridadDrop->id}}">{{$gseguridadDrop->SeguName}} -
							@switch($gseguridadDrop->SeguType)
								@case(0)
									Peligros
									@break
								@case(1)
									Riesgos
									@break
								@case(2)
									Controles Operacionales
									@break
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteGseguridades" disabled id="eliminarSubmitGseguridades" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
		@endslot
	@endcomponent


	{{-- Modal de eliminar gestión ambiental --}}
	@component('layouts.partials.modalDelete')
		@slot('idModal')
			modalDeleteGambiental
		@endslot
		@slot('idform')
			formDeleteGambientales
		@endslot
		@slot('titulo')
			Eliminar Gestión Ambiental
			@endslot
		@slot('action')
			{{ route('gambiental.destroy', 0) }}
		@endslot
		@slot('form')
	         	@method('DELETE')
				@csrf
				<div class="form-group">
					<select id="SelectEliminarGambi" class="form-control" onchange="eliminarGambiental()">
						<option value="0" selected>Seleccionar Gestión Ambiental a Eliminar</option>
						@foreach($gambientalesDrop as $gambientalDrop)
						<option value="{{$gambientalDrop->id}}">{{$gambientalDrop->GesName}} -
							@switch($gambientalDrop->GesType)
								@case(0)
									Aspectos Ambientales
									@break
								@case(1)
									Impactos Ambientales
									@break
								@case(2)
									Controles Operacionales
									@break
							@endswitch
						</option>
						@endforeach
					</select>
				</div>
		@endslot
		@slot('submitbutton')
		<button form="formDeleteGambientales" disabled id="eliminarSubmitGambientales" type="submit" class="btn btn-fill btn-danger fas fa-arrow-circle-up"> Eliminar</button>
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
@endsection




{{-- librerias adicionales para el funcionmiento de la vista --}}
@push('js')
	{{-- <script src="{{ asset('js') }}/datatable-depen.js"></script>
	<script src="{{ asset('js') }}/datatable-plugins.js"></script> --}}
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>

	{{-- Parte de los script de actualizar --}}

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

	function cambiarRecursoId(){
		var id = $('#IdSelectRecurso').val();
		var inputoculto = $('#idocultoRec');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarGambientalId(){
		var id = $('#IdSelectGambiental').val();
		var inputoculto = $('#idocultoGambi');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarGseguridadId(){
		var id = $('#IdSelectGseguridad').val();
		var inputoculto = $('#idocultoGsegu');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	function cambiarEntradaId(){
		var id = $('#IdSelectEntrada').val();
		var inputoculto = $('#idoculto');
		inputoculto.attr('value', id);
		// console.log(id);
	};

	/*Parte de los scripts de ELIMINAR*/

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

	function eliminarRecurso(){
		let formulario = $('#formDeleteRecursos');
		let botonsubmit = $('#eliminarSubmitRecursos');
		var id = $('#SelectEliminarRecursos').val();
		formulario.attr('action', '{{ url('recursos') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarGambiental(){
		let formulario = $('#formDeleteGambientales');
		let botonsubmit = $('#eliminarSubmitGambientales');
		var id = $('#SelectEliminarGambi').val();
		formulario.attr('action', '{{ url('gambiental') }}/'+id);
		if (id > 0) {
			botonsubmit.attr('disabled', false);
		}else{
			botonsubmit.attr('disabled', true);
		}
		// console.log(id);
	};

	function eliminarGseguridad(){
		let formulario = $('#formDeleteGseguridades');
		let botonsubmit = $('#eliminarSubmitGseguridades');
		var id = $('#SelectEliminarGsegu').val();
		formulario.attr('action', '{{ url('gseguridad') }}/'+id);
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


	var contadorPoliticas = 0;
	function addPolitica(){
		var id = $('#IdSelectSalida').val();
		var inputoculto = $('#idocultoSali');
			inputoculto.attr('value', id);
			console.log(id);
	};

	function dropPolitica(){
		var id = $('#IdSelectSalida').val();
		var inputoculto = $('#idocultoSali');
			inputoculto.attr('value', id);
			console.log(id);
	};


</script>
@endpush