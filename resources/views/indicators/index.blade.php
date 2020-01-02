@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')

	<div class="card-header text-center">
	  <h4 class="card-title">INDICADORES</h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	  	<div class="table-responsive" style="background: #e7e7e7; border-radius: 5%;">
		    <table class="table">
		      <thead>
		        <th></th>
		        <th class="text-center">Nombre Indicador</th>
		        <th class="text-center">Nombre Indicador</th>
		      </thead>
		      <tbody>
		      	<tr>
		      		<td></td>
		      	  <td class="text-center">Objetivo</td>
		      	  <td class="text-center"><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></td>
		      	</tr>
		          <tr>
		          	<td></td>
		            <td class="text-center">¿Que Mide?</td>
		            <td class="text-center"><p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p></td>
		          </tr>
		      </tbody>
		    </table>
		    <div class="col-md-12 text-center"> 
		    	<img style="width: 20em; height: 15em;" src="{{ auth()->user()->Avatar }}">
		    </div>
		    <div class="col-md-12" style="padding: 2.5em 2.5em 2.5em 2.5em">
		    	<table class="col-md-12 table">
		    		<thead>
			    		<tr>
			    			<td class="text-center">PERIODO</td>
			    			<td class="text-center">PORCENTAJE</td>
			    			<td class="text-center">DATOS</td>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<tr>
			    			<td class="text-center">2 Meses</td>
			    			<td class="text-center">83%</td>
			    			<td class="text-center">23.400</td>
			    		</tr>
			    		<tr>
			    			<td class="text-center">4 Meses</td>
			    			<td class="text-center">85%</td>
			    			<td class="text-center">32800</td>
			    		</tr>
			    		<tr>
			    			<td class="text-center">6 Meses</td>
			    			<td class="text-center">87%</td>
			    			<td class="text-center">62800</td>
			    		</tr>
			    		<tr>
			    			<td class="text-center">8 Meses</td>
			    			<td class="text-center">90%</td>
			    			<td class="text-center">80900</td>
			    		</tr>
			    	</tbody>
		    	</table>
		    </div>
		    <div style="padding: 1em 1em 1em 1em">
		    	<h4>Analisis</h4>
		    	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    </div>
		</div>
	  </div>
	</div>
@endsection