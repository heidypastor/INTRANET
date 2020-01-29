@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@section('content')
	<div class="card">
		<div class="card-title text-center">
			<h2>Comunicados</h2>
		</div>
		<div class="float-right">
			<a href="{{ route('releases.create') }}" class="fas fa-plus btn btn-fill btn-success b-create"> Crear</a>
		</div>

		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		    <table class="table">
		      <thead>
		        <th class="text-center">Nombre</th>
		        <th class="text-center">Mensaje</th>
		        <th class="text-center">Fecha</th>
		        <th class="text-center">Imagen</th>
		        <th class="text-center">Tipo de anuncio</th>
		        <th class="text-center">Ver Más..</th>
		      </thead>
		      <tbody>
		      	@foreach($releases as $release)
		          <tr>
		            <td class="text-center"><strong>{{$release->RelName}}</strong></td>
		            <td class="text-center">{{$release->RelMessage}}</td>
		            <td class="text-center">{{$release->RelDate}}</td>
		            <td class="text-center"><img src="{{Storage::url($release->RelSrc)}}" width="100" height="100"></td>
		            <td class="text-center">{{$release->RelType}}</td>
		            <td class="text-center"><a href="releases/{{$release->id}}" class="btn btn-fill btn-warning far fa-edit"> Ver Más..</a></td>
		          </tr>
		        @endforeach
		      </tbody>
		    </table>
		  </div>
		</div>
	</div>
@endsection