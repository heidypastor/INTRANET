@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'Estrategicos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
		  <h3 class="card-title"><strong>INDICADORES</strong></h3>
		</div>
		<div class="col-md-12">
			<a href="{{ route('indicators.create') }}" class="float-right fas fa-plus btn btn-sm btn-fill btn-success b-create"> Crear</a>
		</div>
		@include('alerts.success')
		<div class="row mx-auto">
			@foreach($Indicators as $indicator)
				@if($indicator->IndType === 0)
					<div class="col-md-5 text-center index-indicators-1">
						{{-- <div class="col-md-6 mx-auto">
							<div class="card" style="width: 18rem;">
							  @if($indicator->IndGraphic === "")
							      <img src="/white/img/graficos1.jpg" class="card-img-top">
							  @else
							      <img src="{{Storage::url($indicator->IndGraphic)}}" class="card-img-top">
							  @endif
							  <div class="card-body">
							    <h5 class="card-title">Nombre</h5>
							    <p class="card-text">{{$indicator->IndName}}</p>
							    <a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a>
							  </div>
							</div>
						</div> --}}
						<div class="card card-style" {{-- style="background-color: transparent; height: 25em;" --}}>
							<div class="card-body">
									<br>
								<div class="row">
									<div class="col-md-3 text-center">
										<strong>Nombre</strong>
									</div>
									<div class="col-md-9">
										<strong>{{$indicator->IndName}}</strong>
									</div>
								</div>
									<br>
								<div class="row">
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
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-md-12" style="bottom: 0;">
										<a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@else
				@endif
			@endforeach
		</div>
	</div>
@endsection