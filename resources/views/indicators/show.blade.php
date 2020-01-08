@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')
	{{-- @method('GET') --}}

	<div class="card-header text-center">
	  <h4 class="card-title">INDICADORES</h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	  	@foreach($Indicators as $Indicator)
	  	<div style="background: #e7e7e7; border-radius: 5%; margin: 1em 1em 1em 1em">
		    <table class="table">
		      <thead>
		        <th></th>
		        <th class="text-center">    </th>
		        <th class="text-center">{{$Indicator->IndName}}</th>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td></td>
		      	  <td class="text-center">Área</td>
		      	  <td class="text-center"><p>
		      	  	{{-- <ul class="list-group" style="background: #e7e7e7;"> --}}
		      	  		@foreach($Indicator->areas as $area)
		      	  		{{-- <li class="list-group-item"> --}}
		      	  			{{$area->AreaName}}
		      	  		{{-- </li> --}}
		      	  		@endforeach
		      	  	{{-- </ul> --}}</p></td>
		      	</tr>
		      	<tr>
		      		<td></td>
		      	  <td class="text-center">Objetivo</td>
		      	  <td class="text-center"><p> {{$Indicator->IndObjective}} </p></td>
		      	</tr>
		          <tr>
		          	<td></td>
		            <td class="text-center">¿Que Mide?</td>
		            <td class="text-center"><p> {{$Indicator->IndQueMide}} </p></td>
		          </tr>
		          <tr>
		          	<td></td>
		            <td class="text-center">Grafica</td>
		            <td class="text-center"><div class="col-md-12 text-center"><img style="width: 20em; height: 15em; margin: 1.5em 1.5em 1.5em 1.5em; width: 40em; height: 20em;" src="{{$Indicator->IndGraphic}}"></div></td>
		          </tr>
		          <tr>
		          	<td></td>
		            <td class="text-center">Tabla</td>
		            <td class="text-center"><a href="{{ auth()->user()->Avatar }}">Archivo</a></td>
		          </tr>
		          <tr>
		          	<td></td>
		            <td class="text-center">Analisis</td>
		            <td class="text-center"><p>{{$Indicator->IndAnalysis}}</p></td>
		          </tr>
		      </tbody>
		    </table>


		    {{-- <div class="col-md-12 text-center"> 
		    	<img style="width: 20em; height: 15em; margin: 1em 1em 1em 1em; width: 50em; height: 30em;" src="{{$Indicator->IndGraphic}}">
		    </div>
		    <div class="col-md-12 text-center">
		    	<img style="width: 20em; height: 15em; margin: 1em 1em 1em 1em; width: 50em; height: 30em;" src="{{$Indicator->IndTable}}">
		    </div> --}}
		    {{-- <div style="padding: 1em 1em 1em 1em">
		    	<h4>Analisis</h4>
		    	<p>{{$Indicator->IndAnalysis}}</p>
		    </div> --}}
		</div>
		@endforeach
	  </div>
	</div>
@endsection