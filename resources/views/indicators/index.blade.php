@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'indicators'])

@section('content')
	<div class="card-header text-center">
	  <h4 class="card-title">INDICADORES</h4>
	</div>

	<div class="row">
		@foreach($Indicators as $Indicator)
			<div class="col-md-5 text-center" style="background: #e7e7e7; border-radius: 5%; margin: 2.5em 2.5em 2.5em 2.5em;">
				<table class="table">
					<thead>
					  <th></th>
					  <th class="text-center">Nombre</th>
					  <th class="text-center">{{$Indicator->IndName}}</th>
					</thead>
					<tbody>
						<tr>
			      			<td></td>
							<th class="text-center">Grafica</th>
							<td class="text-center"><img src="{{$Indicator->IndGraphic}}"></td>
						</tr>
					</tbody>
				</table>

				{{-- href="/Cita/{{$cita->slug}}" --}}

				<a method='GET' href="indicators/{{$Indicator->id}}" class="btn btn-secondary">Ver Más.</a>
			</div>
		@endforeach
	</div>
@endsection