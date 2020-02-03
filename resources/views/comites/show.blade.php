@extends('layouts.app', ['page' => __('Comites'), 'pageSlug' => 'comites'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comités
@endsection

@section('content')
	<div class="card">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-12">
					<br><br>
					<h3 class="card-title text-center"><strong>Cómites</strong></h3>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<form action="{{ route('comites.destroy', $comite) }}" method="POST">
						  @method('DELETE')
						  @csrf 
						    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
						</form>
					</div>
					<div class="col-md-6 text-center">
						<a href="{{$comite->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Nombre</h4>
					</div>
					<div class="col-md-9 text-center">
						<h4>{{$comite->ComiName}}</h4>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Imagen del cómite</h4>
					</div>
					<div class="col-md-9 text-center">
						<img class="responsive" src="{{Storage::url($comite->ComiSrc)}}">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Foto del cómite</h4>
					</div>
					<div class="col-md-9 text-center">
						<img class="responsive" src="{{Storage::url($comite->ComiImage)}}">
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Función del cómite</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiParaQueSirve}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Telefono de contacto</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiTelefono}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Email de contacto</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiEmail}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Integrantes</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiIntegrantes}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Última reunión</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiDateLast}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Observaciones</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiObservations}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Próxima reunión</h4>
					</div>
					<div class="col-md-9 text-center">
						<p>{{$comite->ComiDateNext}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection