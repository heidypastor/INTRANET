@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@section('content')
	<div class="card">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-12">
					<br><br>
					<h3 class="card-title text-center"><strong>Comunicados</strong></h3>
				</div>
				<div class="row">
					<div class="col-md-6 text-center">
						<button type="button" class="btn btn-danger fas fa-trash" data-toggle="modal" data-target="#eliminar{{$release->id}}">
						  Eliminar
						</button>
						@component('layouts.partials.modal')
							@slot('id')
								{{$release->id}}
							@endslot
							@slot('textModal')
								{{$release->RelName}}
							@endslot
							@slot('botonModal')
								<form action="{{ route('releases.destroy', $release) }}" method="POST">
								  @method('DELETE')
								  @csrf 
								    <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
								</form>
							@endslot
						@endcomponent
					</div>
					<div class="col-md-6 text-center">
						<a href="{{$release->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a><br><br><br>
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
						<h4>{{$release->RelName}}</h4>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Imagen</h4>
					</div>
					<div class="col-md-9 text-center">
						@if($release->RelSrc === "")
						    <img src="/white/img/bloc.jpg">
						@else
						    <img class="resposive" src="{{Storage::url($release->RelSrc)}}">
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Mensaje</h4>
					</div>
					<div class="col-md-9 text-center">
						<p> {{$release->RelMessage}} </p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Fecha de publicación</h4>
					</div>
					<div class="col-md-9 text-center">
						<p> {{$release->RelDate}} </p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<h4 class="text-center negrilla">Tipo de Anuncio</h4>
					</div>
					<div class="col-md-9 text-center">
						<p> {{$release->RelType}} </p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection