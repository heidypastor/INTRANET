@extends('layouts.app', ['pageSlug' => 'comites'])

@section('content')

	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	    <table class="table">
	      <thead>
	        <th class="text-center">Nombre del Cómite</th>
	        <th class="text-center">Imagen de cómite</th>
	        <th class="text-center">Función del comite</th>
	        <th class="text-center">Telefono de contacto</th>
	        <th class="text-center">Email de contacto</th>
	      </thead>
	      <tbody>
	      	@foreach($comites as $comite)
	          <tr>
	            <td class="text-center">{{$comite->ComiName}}</td>
	            <td class="text-center">{{$comite->ComiSrc}}</td>
	            <td class="text-center">{{$comite->ComiImage}}</td>
	            <td class="text-center">{{$comite->ComiParaQueSirve}}</td>
	            <td class="text-center">{{$comite->ComiTelefono}}</td>
	            <td class="text-center">{{$comite->ComiEmail}}</td>
	          </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
@endsection