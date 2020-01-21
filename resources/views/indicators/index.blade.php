@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')
	<div class="card-header text-center">
	  <h4 class="card-title">INDICADORES</h4>
	</div>
	<div>
		<a href="{{ route('indicators.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
	</div>
	<div class="row">
		@foreach($Indicators as $indicator)
			<div class="col-md-5 text-center" style="background: #e7e7e7; border-radius: 5%; margin: 2.5em 2.5em 2.5em 2.5em;">
				<table class="table">
					<thead>
					  <th></th>
					  <th class="text-center">Nombre</th>
					  <th class="text-center">{{$indicator->IndName}}</th>
					</thead>
					<tbody>
						<tr>
			      			<td></td>
							<th class="text-center">Grafica</th>
							<td class="text-center"><img src="{{Storage::url($indicator->IndGraphic)}}"></td>
						</tr>
					</tbody>
				</table>
				<a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a>
			</div>
		@endforeach
	</div>
@endsection