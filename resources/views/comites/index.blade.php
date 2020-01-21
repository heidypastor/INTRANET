@extends('layouts.app', ['pageSlug' => 'comites'])

@section('content')

	<div class="card-title text-center">
		<h2>Comites de Prosarc</h2>
	</div>
	<div class="float-right">
		<a href="{{ route('comites.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
	</div>

	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	    <table class="table">
	      <thead>
	        <th class="text-center">Nombre del Cómite</th>
	        <th class="text-center">Telefono de contacto</th>
	        <th class="text-center">Email de contacto</th>
	        <th class="text-center">Ver más..</th>
	      </thead>
	      <tbody>
	      	@foreach($comites as $comite)
	          <tr>
	            <td class="text-center"><strong>{{$comite->ComiName}}</strong></td>
	            <td class="text-center">{{$comite->ComiTelefono}}</td>
	            <td class="text-center">{{$comite->ComiEmail}}</td>
	            <td class="text-center"><a href="comites/{{$comite->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver más..</a></td>
	          </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
@endsection