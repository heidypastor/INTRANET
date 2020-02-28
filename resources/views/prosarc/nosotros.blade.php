@extends('layouts.app', ['page' => __('Nosotros'), 'pageSlug' => 'nosotros'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Nosotros
@endsection

@section('content')
	<img src="white/img/DJI_0123.jpg" class="fondo-imagen">
	<div class="full-page col-md-12 col-lg-12 col-mx-12">
		<br>
		<div class="col-md-12 col-lg-12 col-mx-12 text-center conoceProsarc mx-auto">
			<div class="col-md-6 mx-auto">
				<img src="white/img/conoceProsarc.png" class="responsive">
			</div>
		</div>
		<div class="col-md-12 col-lg-12 col-mx-12 cuerda text-center mx-auto">
			<div class="{{-- col-md-6 --}} col-mx-6 mx-auto">
				<img src="white/img/cuerda.png" width="50" height="650" class="mx-auto">
			</div>
		</div>
		<div class="col-md-12 col-lg-12 col-mx-12 text-center">
			<div class="col-md-6 mx-auto" style="-webkit-perspective: 1000px; perspective: 1000px;">
				<div class="card-nuevo imagen">
				{{-- <div class="prueba"> --}}
					<div class="front">
						<img src="white/img/mision.png" class="responsive">		
					</div>
					<div class="back">
						<br><br><br>
						<h3 class="mision-parrafo">MISIÓN</h3>
						<br><br><br>
						<p class="mision-parrafo"> 
							Ejecutar políticas, planes, programas y proyectos ambientales, a través de la implementación de la Licencia Ambiental y normas ambientales, para contribuir a brindar soluciones integrales a la Industria en General para el Manejo de Residuos Peligrosos.
						</p>
						<br><br><br><br><br>
					</div>	
				{{-- </div> --}}
				</div>			
			</div>
		</div>
		{{-- <div class="col-md-12 col-lg-12 col-mx-12 cuerda-dos text-center mx-auto">
			<div class="col-md-6 mx-auto">
				<img src="white/img/cuerda.png" width="50" height="650" class="mx-auto">
			</div>
		</div> --}}
	</div>
@endsection