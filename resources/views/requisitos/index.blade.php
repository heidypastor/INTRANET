@extends('layouts.app', ['page' => __('Requisitos Legales'), 'pageSlug' => 'requisitos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Requisitos y Documentos Legales
@endsection

@section('content')

	<div class="card col-md-12">
		<div class="card-title text-center col-md-12">
			<br>
			<h1>Requisitos y Documentos Legales</h1>
		</div>
		@can('createRequisitos')
		<div class="pull-left">
			<a href="{{ route('requisitos.create') }}" class="fas fa-plus btn btn-sm btn-fill btn-success"> Crear</a>
		</div>
		@endcan
		@include('alerts.success')
		<div class="card-body">
			<div class="row">
				@foreach($requisitos as $requisito)
				<div class="col-md-6">
					<div class="card" style="background-color: #f5f6fa;">
						<div class="card-header">
							@if($requisito->ReqLink == "N" || $requisito->ReqLink == "")
								{{$requisito->ReqName}}
							@else
								<a href="{{$requisito->ReqLink}}">{{$requisito->ReqName}}</a>
							@endif
						</div>
						<div class="card-body">
					      	<div class="row">
					      	      <div class="col-md-6">
					      	            <strong>Tipo:</strong>
					      	      </div>
					      	      <div class="col-md-6">
					      	            @switch($requisito->ReqType)
					      	                  @case(1)
					      	                  Legal<
					      	                        @break
					      	                  @case(2)
					      	                  Empresarial
					      	                        @break
					      	                  @case(3)
					      	                  Otro - Cliente
					      	                        @break
					      	            @endswitch
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-6">
					      	            <strong>Fecha:</strong>
					      	      </div>
					      	      <div class="col-md-6">
					      	            {{$requisito->ReqDate}}
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-6">
					      	            <strong>Ente emisor:</strong>
					      	      </div>
					      	      <div class="col-md-6">
					      	            {{$requisito->ReqEnte}}
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      @if($requisito->ReqSrc == "N" || $requisito->ReqSrc == "")
					      	            <div class="col-md-6">
					      	                  <strong>Archivo:</strong>
					      	            </div>
					      	            <div class="col-md-6">
					      	                  Sin Archivo<br>
					      	            </div>
					      	      @else
					      	            <div class="col-md-6">
					      	                  <strong>Archivo:</strong>
					      	            </div>
					      	            <div class="col-md-6">
					      	                  <a href="{{Storage::url($requisito->ReqSrc)}}">Archivo</a>
					      	            </div>
					      	      @endif
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-6"> 
					      	            <strong>Descripción:</strong>
					      	      </div>
					      	      <div class="col-md-6">
					      	            {{$requisito->ReqQueDice}}
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-12">
					      	            <strong>Aplicable:</strong>
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-12">
					      	            <ul>
					      	                  @foreach($requisito->areas as $area)
					      	                  <li style="background-color: #ffffff;"><font color="#525f7f">{{$area->AreaName}}</font></li><br>
					      	                  @endforeach
					      	            </ul>
					      	      </div>
					      	</div>
					      	<div class="col-md-12"><br></div>
					      	<div class="row">
					      	      <div class="col-md-12">
					      	      	@can('updateRequisto')
					      	            <a href="requisitos/{{$requisito->id}}/edit" class="btn btn-fill btn-warning far fa-edit"></a>
					      	        @endcan
					      	      {{-- </div>
					      	      <div class="col-md-6"> --}}
					      	      	@can('deleteRequisito')
					      	            <button type="button" class="btn btn-danger fas fa-trash pull-right" data-toggle="modal" data-target="#eliminar{{$requisito->id}}">
					      	            </button>
					      	            @component('layouts.partials.modal')
					      	                  @slot('id')
					      	                        {{$requisito->id}}
					      	                  @endslot
					      	                  @slot('textModal')
					      	                        {{$requisito->ReqName}}
					      	                  @endslot
					      	                  @slot('botonModal')
					      	                        <form id="eliminarrequisito" action="{{ route('requisitos.destroy', $requisito) }}" method="POST" class="pull-right">
					      	                              @method('DELETE')
					      	                              @csrf
					      	                              <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
					      	                        </form>
					      	                  @endslot
					      	            @endcomponent
					      	        @endcan
					      	      </div>
					      	</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection