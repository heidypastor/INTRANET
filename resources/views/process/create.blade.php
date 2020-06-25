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
        <link href="{{ asset('css') }}/select2.css" rel="stylesheet"/>
@endpush

@section('content')
	{{-- contenido de la pagina --}}
	<div class="card">
		<div class="card-header px-4">
			<div class="row justify-content-between">
				<div>
					<h2>
						<b>{{'Nuevo Proceso'}}</b>
					</h2>
				</div>
				<div>
					 <div class="btn-group">
						<a type="button" id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class=" btn btn-info dropdown-toggle">Modificar Elementos</a>
						<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow dropdown-menu-left">
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Recursos</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateRecursos">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditRecursos">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteRecursos">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Gestión de SST</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGseguridad">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditGseguridad">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGseguridad">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Proveedores</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateProveedores">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditProveedores">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteProveedores">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Entradas</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateEntradas">Nueva</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditEntradas">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteEntradas">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Actividades</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateActividades">Nueva</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditActividades">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteActividad">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Salidas</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateSalidas">Nueva</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditSalidas">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteSalidas">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Gestión Ambiental</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateGambiental">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditGambiental">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteGambiental">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Clientes</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<a class="dropdown-item" data-toggle="modal" data-target="#modalCreateClientes">Nuevo</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalEditClientes">Actualizar</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#modalDeleteClientes">Eliminar</a>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Politicas</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<button class="dropdown-item" id="addpoliticbutton" onclick="addPolitica()">
									Añadir politica
									</button>
								</ul>
							</li>
							<li class="dropdown-submenu dropleft">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Riesgos</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<button class="dropdown-item" id="addriesgobutton" onclick="addRiesgo()">
									Añadir riesgo
									</button>
								</ul>
							</li>
						</ul>
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
						<div class="custom-input-file">
							<label class="input-label" for="ProcImage">Imagen de referencia</label>
							<input type="file" required class="form-control" id="ProcImage" placeholder="Imagen de Referencia" name="ProcImage">
							<img id="ProcImageOutput" src="#" alt="imagen no valida" width="200px" class="d-none"/>
						</div>
					</div>

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcObjetivo">Objetivo del Proceso</label>
							   <input class="form-control" id="ProcObjetivo" name="ProcObjetivo">
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAlcance">Alcance del Proceso</label>
							<input max="500" class="form-control" id="ProcAlcance" name="ProcAlcance">
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcTipo">Tipo de Proceso</label>
							<select multiple id="ProcTipo" class="form-control selectmultiple" name="ProcTipo" placeholder="seleccione">
								<option value="1">De Apoyo</option>
								<option value="2">Básico</option>
								<option value="3">Estratégico</option>
							</select>
						</div>
					</div>
				</div>
					
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcResponsable">Responsable</label>
							<select id="ProcResponsable" class="form-control selectmultiple" name="ProcResponsable[]" placeholder="seleccione" multiple>
								@foreach($cargos as $cargo)
								<option value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcParticipantes">Participantes</label>
							<select multiple id="ProcParticipantes" class="form-control selectmultiple" name="ProcParticipantes" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Provedores">Provedores</label>
							  <select multiple id="Provedores" class="form-control selectmultiple" name="Provedores[]" placeholder="seleccione">
								@foreach($proveedores as $proveedor)
									<option value="{{$proveedor->id}}">{{$proveedor->ProvName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Entradas">Entradas</label>
							<select multiple id="Entradas" class="form-control selectmultiple" name="Entradas[]" placeholder="seleccione">
								@foreach($entradas as $entrada)
									<option value="{{$entrada->id}}">{{$entrada->InputName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Actividades">Actividades</label>
							<select multiple id="Actividades" class="form-control selectmultiple" name="Actividades[]" placeholder="seleccione">
								@foreach($actividades as $actividad)
									<option value="{{$actividad->id}}">{{$actividad->ActiName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Salidas">Salidas</label>
							<select multiple id="Salidas" class="form-control selectmultiple" name="Salidas[]" placeholder="seleccione">
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
							<label class="input-label" for="Clientes">Clientes</label>
							<select multiple id="Clientes" class="form-control selectmultiple" name="Clientes[]" placeholder="seleccione">
								@foreach($clientes as $cliente)
									<option value="{{$cliente->id}}">{{$cliente->CliName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRecursos">Recursos</label>
							  <select multiple id="ProcRecursos" class="form-control select" name="ProcRecursos[]" placeholder="seleccione">
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
							<label class="input-label" for="ProcAmbienTrabajo">Ambiente de Trabajo</label>
							<input class="form-control" id="ProcAmbienTrabajo" name="ProcAmbienTrabajo">
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcRequsitos">Requisitos por cumplir</label>
							  <select multiple class="form-control" name="ProcRequsitos[] selectmultiple" placeholder="seleccione" id="ProcRequsitos">
								@foreach($requisitos as $requisito)
									<option value="{{$requisito->id}}">{{$requisito->ReqName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
					
				<div class="form-row" id="containerDeRiesgos">
					<div class="col-md-6 col-xs-12" id="riesgos0">
						<div class="form-group">
							<label class="input-label" for="ProcRiesgosinput0">Riesgos</label>
							<div class="input-group">
								<input type="text" required id="ProcRiesgosinput0" class="form-control" placeholder="Riesgos" aria-label="Riesgos" aria-describedby="button-addon2" name="ProcRiesgos[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropRiesgo(0)">Borrar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gambiental">Gestión Ambiental</label>
							  <select multiple id="Gambiental" class="form-control selectmultiple" name="Gambiental[]" placeholder="seleccione">
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
				</div>
					
				<div class="form-row" id="containerDePoliticas">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Gseguridad">Gestión de Seguridad y Salud en el Trabajo</label>
							  <select multiple id="Gseguridad" class="form-control selectmultiple" name="Gseguridad[]" placeholder="seleccione">
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
					<div class="col-md-6 col-xs-12" id="politicaOperacion0">
						<div class="form-group">
							<label class="input-label" for="ProcPolitOperacioninput0">Politica de Operación</label>
							<div class="input-group">
								<input type="text" required id="ProcPolitOperacioninput0" class="form-control" placeholder="Politica de Operación" aria-label="Politica de Operación" aria-describedby="button-addon2" name="ProcPolitOperacion[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropPolitica(0)">Borrar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<div class="form-row" >
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Indicadores">Indicadores</label>
							<select multiple id="Indicadores" class="form-control selectmultiple" name="Indicadores[]" placeholder="seleccione">
								@foreach($indicadores as $indicador)
									<option value="{{$indicador->id}}">{{$indicador->IndName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Docs">Documentación aplicable</label>
							<select multiple id="Docs" class="form-control selectmultiple" name="Docs[]" placeholder="seleccione">
								@foreach($documentos as $documento)
									<option value="{{$documento->id}}">{{$documento->DocName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcElaboro">Elaborado Por</label>
							<select id="ProcElaboro" class="form-control select" name="ProcElaboro" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
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
							<select id="ProcReviso" class="form-control select" name="ProcReviso" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="ProcAprobo">Aprobado Por</label>
							<select id="ProcAprobo" class="form-control select" name="ProcAprobo" placeholder="seleccione">
								@foreach($cargos as $cargo)
									<option value="{{$cargo->CargoName}}">{{$cargo->CargoName}}</option>
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

				{{-- <div class="form-row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Soporte">Procesos de Soporte</label>
							<select multiple id="Soporte" class="form-control selectmultiple" name="Soporte[]" placeholder="seleccione">
								@foreach($soportes as $soporte)
									<option value="{{$soporte->id}}">{{$soporte->ProcName}}</option>
								@endforeach
							</select>
						</div>
					</div>
					

					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label class="input-label" for="Areas">Areas Que participan</label>
							<select multiple id="Areas" class="form-control selectmultiple" name="Areas[]" placeholder="seleccione">
								@foreach($areas as $area)
									<option value="{{$area->id}}">{{$area->AreaName}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div> --}}
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
				<select name="SeguType" class="text-center form-control select" required="">
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
				<select name="GesType" class="text-center form-control select" required="">
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
				<select name="RecType" class="text-center form-control select" required="">
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
			<div class="form-group">
				<label>Tipo de proveedor</label>
				<select name="ProvType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
			</div>
		@endslot
	@endcomponent

	{{-- Este modal corresponde a las Entradas --}}
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
			<div class="form-group">
				<label>Tipo de entrada</label>
				<select name="InputType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
			<div class="form-group">
				<label>Tipo de actividad</label>
				<select name="ActiType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
			<div class="form-group">
				<label>Tipo de salida</label>
				<select name="OutputType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
			<div class="form-group">
				<label>Tipo de cliente</label>
				<select name="CliType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
			</div>
		@endslot
	@endcomponent


	{{-- Parte del documento donde se encuentran los modales del EDIT --}}



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
				<select id="IdSelectGseguridad" class="form-control select" onchange="cambiarGseguridadId()">
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
				<select name="SeguType" class="text-center form-control select" required="">
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
				<select id="IdSelectGambiental" class="form-control select" onchange="cambiarGambientalId()">
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
				<select name="GesType" class="text-center form-control select" required="">
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
				<select id="IdSelectRecurso" class="form-control select" onchange="cambiarRecursoId()">
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
				<select name="RecType" class="text-center form-control select" required="">
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
				<select id="IdSelectProveedor" class="form-control select" onchange="cambiarProveedorId()">
					@foreach($proveedores as $proveedor)
					<option value="{{$proveedor->id}}">{{$proveedor->ProvName." - ".$proveedor->ProvType}}</option>
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
			<div class="form-group">
				<label>Nuevo tipo de proveedor</label>
				<select name="ProvType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
				<select id="IdSelectEntrada" class="form-control select" onchange="cambiarEntradaId()">
					@foreach($entradas as $entrada)
					<option value="{{$entrada->id}}">{{$entrada->InputName." - ".$entrada->InputType}}</option>
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
			<div class="form-group">
				<label>Nuevo tipo de entrada</label>
				<select name="InputType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
				<select id="IdSelectActividad" class="form-control select" onchange="cambiarActividadId()">
					@foreach($actividades as $actividad)
						<option value="{{$actividad->id}}">{{$actividad->ActiName." - ".$actividad->ActiType}}</option>
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
			<div class="form-group">
				<label>Nuevo tipo de actividad</label>
				<select name="ActiType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
				<select id="IdSelectSalida" class="form-control select" onchange="cambiarSalidaId()">
					@foreach($salidas as $salida)
						<option value="{{$salida->id}}">{{$salida->OutputName." - ".$salida->OutputType}}</option>
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
			<div class="form-group">
				<label>Nuevo tipo de salida</label>
				<select name="ActiType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
				<select id="IdSelectCliente" class="form-control select" onchange="cambiarClienteId()">
					@foreach($clientes as $cliente)
					<option value="{{$cliente->id}}">{{$cliente->CliName." - ".$cliente->CliType}}</option>
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
			<div class="form-group">
				<label>Nuevo tipo de cliente</label>
				<select name="CliType" class="text-center form-control select">
					<option value="Planear">Planear</option>
					<option value="Hacer">Hacer</option>
					<option value="Verificar">Verificar</option>
					<option value="Actuar">Actuar</option>
				</select>
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
					<select id="SelectEliminarProveedores" class="form-control select" onchange="eliminarProveedor()">
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
					<select id="SelectEliminarRecursos" class="form-control select" onchange="eliminarRecurso()">
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
					<select id="SelectEliminarGsegu" class="form-control select" onchange="eliminarGseguridad()">
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
					<select id="SelectEliminarGambi" class="form-control select" onchange="eliminarGambiental()">
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
					<select id="SelectEliminarSalidas" class="form-control select" onchange="eliminarSalida()">
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
					<select id="SelectEliminarEntradas" class="form-control select" onchange="eliminarEntrada()">
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
					<select id="SelectEliminarActividad" class="form-control select" onchange="eliminarActividad()">
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
					<select id="SelectEliminarClientes" class="form-control select" onchange="eliminarCliente()">
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
	<script src="{{ asset('js') }}/select2.js"></script>
@endpush

{{-- scripts adicionales para el funcionmiento de la vista --}}
@push('scripts')
<script>

	/*script para activar el select 2*/
	$(document).ready(function() {
		$('select').select2({
			placeholder: 'Selecciona...',
		});
		$('.select2-container').width('100%');
	});

	//Parte de los script de actualizar
	function cambiarClienteId(){
		var id = $('#IdSelectCliente').val();
		var inputoculto = $('#idocultoCli');
		inputoculto.attr('value', id);
		console.log(id);
		var clientes = {!! json_encode($clientes->toArray()) !!};
		clientes.forEach(client => {
			if (client.id == id) {
				console.log(client.CliType)
				$('#edit-cli').val(client.CliType);
			}
		});
	};

	function cambiarProveedorId(){
		var id = $('#IdSelectProveedor').val();
		var inputoculto = $('#idocultoProv');
		inputoculto.attr('value', id);
		var proveedores = {!! json_encode($proveedores->toArray()) !!};
		proveedores.forEach(proveedor => {
			if (proveedor.id == id) {
				switch (proveedor.ProvType) {
					case 'Planear':
					$('#edit-prov').val('Planear');
						break;

					case 'Hacer':
					$('#edit-prov').val('Hacer');
						break;

					case 'Verificar':
					$('#edit-prov').val('Verificar');
						break;

					case 'Actuar':
					$('#edit-prov').val('Actuar');
						break;		
				
					default:
					console.log("proveedor no valido");
						break;
				}
			}
		});
		// console.log(proveedores);
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
		contadorPoliticas++
		container = $('#containerDePoliticas')
		container.append(`<div class="col-md-6 col-xs-12" id="politicaOperacion`+contadorPoliticas+`">
						<div class="form-group">
							<label class="input-label" for="ProcPolitOperacion`+contadorPoliticas+`">Politica de Operación</label>
							<div class="input-group">
								<input type="text" required id="ProcPolitOperacioninput`+contadorPoliticas+`" class="form-control" placeholder="Politica de Operación" aria-label="Politica de Operación" aria-describedby="button-addon2" name="ProcPolitOperacion[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropPolitica(`+contadorPoliticas+`)">Borrar</button>
								</div>
							</div>
						</div>
					</div>`)
	};

	function dropPolitica(id){
		var id = $('#politicaOperacion'+id).remove();
	};

	
</script>




<script type="text/javascript">
	var contadorRiesgos = 0;
	function addRiesgo(){
		contadorRiesgos++
		container = $('#containerDeRiesgos')
		container.append(`<div class="col-md-6 col-xs-12" id="riesgos`+contadorRiesgos+`">
						<div class="form-group">
							<label class="input-label" for="ProcRiesgos`+contadorRiesgos+`">Riesgos</label>
							<div class="input-group">
								<input type="text" required id="ProcRiesgosinput`+contadorRiesgos+`" class="form-control" placeholder="Riesgos" aria-label="Riesgos" aria-describedby="button-addon2" name="ProcRiesgos[]">
								<div class="input-group-append eliminarpolitica">
								<button class="btn btn-danger" type="button" id="button-addon2" onclick="dropRiesgo(`+contadorRiesgos+`)">Borrar</button>
								</div>
							</div>
						</div>
					</div>`)
	};

	function dropRiesgo(id){
		var id = $('#riesgos'+id).remove();
	};
</script>





<script>
$(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('div.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});
</script>
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