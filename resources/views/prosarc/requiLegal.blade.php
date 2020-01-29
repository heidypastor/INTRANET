@extends('layouts.app', ['page' => __('Requisitos Legales'), 'pageSlug' => 'nosotros'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Requisitos Legales
@endsection

@section('content')

	<div class="card">
		<div class="card-title text-center">
			<br>
			<h1>Requisitos Legales</h1>
		</div>

		<div class="accordion" id="accordionExample">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h2 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          {{$requisitosLegales->ReqName}}
		        </button>
		      </h2>
		    </div>

		    <div id="collapseOne" class="collapse show requi-legal" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
		      	<table>
		      		<tr><td>Tipo:</td> <td>{{$requisitosLegales->ReqType}}</td></tr>
	      			<tr><td>Fecha:</td> <td> {{$requisitosLegales->ReqDate}}</td></tr>
	      			<tr><td>Ente emisor:</td> <td> {{$requisitosLegales->ReqEnte}}</td></tr>
	      			<tr><td>Descripción:</td> <td> {{$requisitosLegales->ReqQueDice}}</td></tr>
	      			<tr><td>Este requisto aplica para las áreas de </td></tr>
	      			<tr><td>{{$requisitosLegales->ReqAplica}} </td></tr>
		      	</table>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Requisito Legal #2
		        </button>
		      </h2>
		    </div>
		    <div id="collapseTwo" class="collapse requi-legal" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h2 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Requisito Legal #3
		        </button>
		      </h2>
		    </div>
		    <div id="collapseThree" class="collapse requi-legal" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		      </div>
		    </div>
		  </div>
		</div>
	</div>

@endsection