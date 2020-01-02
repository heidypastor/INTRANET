@extends('layouts.app', ['page' => __('Áreas'), 'pageSlug' => 'areas'])

@section('content')

	<div class="card-header text-center">
	  <h4 class="card-title">Listado de Áreas</h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	    <table class="table">
	      <thead>
	        <th class="text-center">Nombre Área</th>
	        <th class="text-center">Sede Área</th>
	      </thead>
	      <tbody>
	      	@foreach($Areas as $Area)
	          <tr>
	            <td class="text-center">{{$Area->AreaName}}</td>
	            <td class="text-center">{{$Area->AreaSede}}</td>
	          </tr>
	        @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
@endsection