@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('content')

	<div class="card-header text-center">
	  <h4 class="card-title">Documentos</h4>
	</div>

	<div>
		<div class="table-responsive table-upgrade">
			<table class="table" id="tabledocuments">
			  <thead>
			    <th class="text-center">Nombre</th>
			    <th class="text-center">Archivo</th>
			    <th class="text-center">Versión</th>
			    <th class="text-center">Tamaño Archivo</th>
			    <th class="text-center">Publicado</th>
			  </thead>
			  <tbody>
			  	@foreach($Documents as $Document)
			      <tr>
			        <td class="text-center">{{$Document->DocName}}</td>
			        <td class="text-center"><a href="{{$Document->DocSrc}}">{{$Document->DocOriginalName}}</td>
		        	<th class="text-center">{{$Document->DocVersion}}</th>
		        	<th class="text-center">{{$Document->DocSize}}</th>
		        	<th class="text-center">{{ $Document->DocPublisher === 0 ? "No Publicado" : "Publicado" }}</th>
			      </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>

@endsection