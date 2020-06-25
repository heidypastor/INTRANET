@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])
@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection
@section('htmlheader_title')
Proceso de {{$proceso->ProcName}}
@endsection
@push('css')
{{--
<link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet" />
<link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet" /> --}}
@endpush
@section('content')
	<div class="card">
		<div class="container">
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<a href="{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a>
				<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$proceso->id}}">
				  Eliminar
				</button>
				@component('layouts.partials.modal')
					@slot('id')
						{{$proceso->id}}
					@endslot
					@slot('textModal')
						{{$proceso->ProcName}}
					@endslot
					@slot('botonModal')
						<form action="{{ route('proceso.destroy', $proceso) }}" method="POST">
						    @method('DELETE')
						    @csrf 
						    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
						</form>
					@endslot
				@endcomponent
			</div>
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<div class="col-md-3 margen" style="background-color:white;">
				<img src="{{asset('white/img/logo_nombre.png')}}" class="py-5">
				</div>
				<div class="col-md-5 text-center margen">
					<h4>CARACTERIZACIÓN DE PROCESO</h4><br>
					<h4>SISTEMA DE GESTIÓN INTEGRAL - HSEQ</h4>
				</div>
				<div class="col-md-4 text-center margen">
					<h4>FORMATO</h4><br>
					<div class="row">
						<div class="col-md-4 margen">
							<h4>HSEQ-04</h4>
						</div>
						<div class="col-md-4 margen">
							<h4>{{$proceso->ProcRevVersion}}</h4>
						</div>
						<div class="col-md-4 margen">
							<h4>{{$proceso->ProcDate}}</h4>
						</div>
					</div>
				</div>

				<div class="col-md-3 margen">
					{{-- <img src="{{Storage::url($proceso->ProcImage)}}"> --}}
					@if($proceso->ProcImage === "")
					<a href="/white/img/no_image.png"> <img src="/white/img/no_image.png" class="responsive"></a>
					@else
					<a href="{{Storage::url($proceso->ProcImage)}}"> <img src="{{Storage::url($proceso->ProcImage)}}" class="responsive"></a>
					@endif
				</div>
				<div class="col-md-5 text-center margen">
					<br><h4>{{$proceso->ProcName}}</h4><br>
				</div>
				<div class="col-md-4 text-center margen">
					<br>
					@foreach($proceso->areas as $area)
						{{$area->AreaName}}<br>
					@endforeach
				</div>
				
				<div class="col-md-6 margen">
					<h4>OBJETIVO</h4><br>
					<p>{{$proceso->ProcObjetivo}}</p>
				</div>
				<div class="col-md-3 margen">
					<h4>LIDER</h4><br>
					<p>{{$proceso->ProcAutoridad}}</p>
				</div>
				<div class="col-md-3 margen">
					<h4>RESPONSABLES</h4><br>
					<p>
						@foreach($proceso->ProcResponsable as $responsable)
							<li>{{$responsable}}</li>
						@endforeach
					</p>
				</div>

				<div class="col-md-12 margen">
					<h4>ALCANCE</h4><hr>
					<p>{{$proceso->ProcAlcance}}</p>
				</div>
			</div>
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<div class="col-md-12 text-center margen color">
					<h4>PLANEAR</h4>
				</div>
				<div class="col-md-12">
					<div class="d-flex flex-sm-row flex-column justify-content-between">
						<div>PROVEEDOR</div>
						<div>ENTRADA</div>
						<div>ACTIVIDAD / ETAPA</div>
						<div>RESULTADOS / SALIDAS</div>
						<div>CLIENTE</div>
					</div>
					<div class="d-flex flex-sm-row flex-column justify-content-between"></div>
				</div>
			</div>
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<div class="col-md-12 text-center margen color">
					<h4>HACER</h4> 
				</div>
				<div class="col-md-12">
					<div class="d-flex flex-sm-row flex-column justify-content-between">
						<div>PROVEEDOR</div>
						<div>ENTRADA</div>
						<div>ACTIVIDAD / ETAPA</div>
						<div>RESULTADOS / SALIDAS</div>
						<div>CLIENTE</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<div class="col-md-12 text-center margen color">
					<h4>VERIFICAR</h4> 
				</div>
				<div class="col-md-12">
					<div class="d-flex flex-sm-row flex-column justify-content-between">
						<div>PROVEEDOR</div>
						<div>ENTRADA</div>
						<div>ACTIVIDAD / ETAPA</div>
						<div>RESULTADOS / SALIDAS</div>
						<div>CLIENTE</div>
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap justify-content-sm-around justify-content-between p-2">
				<div class="col-md-12 text-center margen color">
					<h4>ACTUAR</h4> 
				</div>
				<div class="col-md-12">
					<div class="d-flex flex-sm-row flex-column justify-content-between">
						<div>PROVEEDOR</div>
						<div>ENTRADA</div>
						<div>ACTIVIDAD / ETAPA</div>
						<div>RESULTADOS / SALIDAS</div>
						<div>CLIENTE</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
{{-- librerias adicionales para el funcionamiento de la vista --}}
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
