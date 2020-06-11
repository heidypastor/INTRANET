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
					@can('deleteComites')
					<div class="col-md-6 text-center">
						<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$comite->id}}">
						  Eliminar
						</button>
						@component('layouts.partials.modal')
							@slot('id')
								{{$comite->id}}
							@endslot
							@slot('textModal')
								{{$comite->ComiName}}
							@endslot
							@slot('botonModal')
								<form action="{{ route('comites.destroy', $comite) }}" method="POST">
								  @method('DELETE')
								  @csrf 
								    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
								</form>
							@endslot
						@endcomponent
					</div>
					@endcan
					@can('updateComites')
					<div class="col-md-6 text-center">
						<a href="{{$comite->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
					</div>
					@endcan
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Nombre</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<h4>{{$comite->ComiName}}</h4>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Imagen del cómite</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<div class="col-md-12">
							@if($comite->ComiSrc === "")
							    <img src="/white/img/empresa.jpg">
							@else
							    <img class="responsive" src="{{Storage::url($comite->ComiSrc)}}">
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Foto del cómite</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<div class="col-md-12">
							@if($comite->ComiImage === "")
							    <img src="/white/img/comite.png">
							@else
							    <img class="responsive" src="{{Storage::url($comite->ComiImage)}}">
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Función del cómite</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiParaQueSirve}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Telefono de contacto</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiTelefono}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Email de contacto</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiEmail}}</p>
					</div>
				</div>
			</div>
			{{-- <div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Integrantes</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiIntegrantes}}</p>
					</div>
				</div>
			</div> --}}
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Última reunión</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiDateLast}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Observaciones</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiObservations}}</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row mx-auto">
					<div class="col-md-3 mx-auto recuadro">
						<h4 class="text-center negrilla">Próxima reunión</h4>
					</div>
					<div class="col-md-8 recuadro-2 mx-auto text-justify">
						<p>{{$comite->ComiDateNext}}</p>
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>
@endsection