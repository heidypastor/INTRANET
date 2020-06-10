@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'Estrategicos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores Estrategicos
@endsection

@section('content')
	<div class="col-md-12">
		<div class="col-md-12 text-center">
			<h3><strong>Indicadores Estrategicos</strong></h3>
		</div>
		<div class="col-md-12">
			<a href="{{ route('indicators.create') }}" class="float-right fas fa-plus btn btn-sm btn-fill btn-success b-create"> Crear</a>
		</div>
		@include('alerts.success')
	</div>
	<div class="col-md-12 row">
		{{-- @foreach($Indicators as $indicator)
			@if($indicator->IndType === 0)
			<div class="col-md-5 col-sm-12 text-center index-indicators-1">
				<div class="col-md-12 row">
					<div class="col-md-12"><br><br></div>
					<div class="col-md-3 text-center">
						<strong>Nombre</strong>
					</div>
					<div class="col-md-9">
						<strong>{{$indicator->IndName}}</strong>
					</div>
				</div>
				<div class="col-md-12 row">
					<div class="col-md-12"><br><br></div>
					<div class="col-md-3 text-center">
						<strong>Gráfica</strong>
					</div>
					<div class="col-md-9">
						<div class="col-md-12">
							@if($indicator->IndGraphic === "")
							    <img src="/white/img/graficos1.jpg" class="responsive">
							@else
							    <img src="{{Storage::url($indicator->IndGraphic)}}" class="responsive">
							@endif
						</div>
					</div>
				</div>
				<div class="col-md-12 row">
					<div class="col-md-12"><br><br></div>
					<div class="col-md-12" style="bottom: 0;">
						<a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a>
					</div>
					<div class="col-md-12"><br></div>
				</div>
			</div>
			@endif
		@endforeach --}}
		@foreach($Indicators as $indicator)
			@if($indicator->IndType === 0)
			<div class="card bg-transparent text-white col-md-5 col-sm-12 text-center index-indicators-1">
				@if($indicator->IndGraphic === "")
					<img src="/white/img/graficos1.jpg" class="card-img" alt="Imagen no disponible">
				@else
					<img src="{{Storage::url($indicator->IndGraphic)}}" class="card-img" alt="Imagen no disponible">
				@endif
				<div class="card-img-overlay">
					<h5 class="card-title"><strong><a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-sm btn-secondary"> {{$indicator->IndName}}</a></strong></h5>
					{{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<p class="card-text">Last updated 3 mins ago</p> --}}
				</div>
			</div>
			@endif
		@endforeach
	</div>
@endsection