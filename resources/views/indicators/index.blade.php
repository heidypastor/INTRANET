@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'Estrategicos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores Estrategicos
@endsection

@section('content')
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 text-center">
			<h3 class="mb-0">Indicadores Estrategicos</h3>
		</div>
		<div class="col-md-2 mb-2">
			<a href="{{ route('indicators.create') }}" class="fas fa-plus btn btn-success"> Crear</a>
		</div>
		<div class="col-md-12">
			@include('alerts.success')
		</div>
	</div>
	<div class="d-flex flex-row">
		<div class="d-inline-flex w-100 m-2 flex-column">
			@foreach($Indicators as $indicator)
				@if($indicator->IndType === 0)
					@if ($loop->odd)
						
						<div class="card bg-transparent text-white text-center">
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
					@else

					@endif
				@endif
			@endforeach
		</div>
		<div class="d-inline-flex w-100 m-2 flex-column">
			@foreach($Indicators as $indicator)
				@if($indicator->IndType === 0)
					@if ($loop->even)
						
						<div class="card bg-transparent text-white text-center">
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
				@endif
			@endforeach
		</div>
	</div>
	
@endsection