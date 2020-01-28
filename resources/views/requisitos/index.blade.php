@extends('layouts.app', ['page' => __('Requisitos Legales'), 'pageSlug' => 'requisitos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Requisitos Legales
@endsection

@section('content')

	<div class="card col-md-12">
		<div class="card-title text-center col-md-12">
			<br>
			<h1>Requisitos Legales</h1>
		</div>
		<div class="pull-left">
			<a href="{{ route('requisitos.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
		</div>

		<div class="card-body">
			<div class="row">
				@foreach($requisitos as $requisito)
				<div class="col-md-6">
					<div class="card" style="background-color: #f5f6fa;">
						<div class="card-header">
							{{$requisito->ReqName}}
						</div>
						<div class="card-body">
					      	<table>
					      		<tr>
					      			<td><strong>Tipo:</strong></td> 
					      			<td>{{$requisito->ReqType}}</td>
					      		</tr>
				      			<tr>
				      				<td><strong>Fecha:</strong></td> 
				      				<td> {{$requisito->ReqDate}}</td>
				      			</tr>
				      			<tr>
				      				<td><strong>Ente emisor:</strong></td> 
				      				<td> {{$requisito->ReqEnte}}</td>
				      			</tr>
				      			<tr>
				      				<td><strong>Descripción:</strong></td> 
				      				<td> {{$requisito->ReqQueDice}}</td>
				      			</tr>
				      			<tr>
				      				<td><strong>Este requisto aplica para las áreas de </strong></td>
				      			</tr>
				      			<tr>
				      				<td>
				      					<ul>
					      					@foreach($requisito->areas as $area)
					      					<li style="background-color: ##ffffff;"><font color="#525f7f">{{$area->AreaName}}</font></li>
					      					@endforeach
				      					</ul>
				      				</td>
				      			</tr>
				      			<tr>
				      				<td>
				      					<a href="requisitos/{{$requisito->id}}/edit" class="btn btn-fill btn-warning far fa-edit"></a>
				      				</td>
				      				<td>
				      					<form id="eliminarrequisito" action="{{ route('requisitos.destroy', $requisito) }}" method="POST" class="pull-right">
				      						@method('DELETE')
				      						@csrf
				      						<button type="submit" class="btn btn-danger fas fa-trash"></button>
				      					</form>
				      				</td>	      				
				      			</tr>
					      	</table>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection