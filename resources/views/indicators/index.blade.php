@extends('layouts.app', ['page' => __('Indicadores'), 'pageSlug' => 'Estrategicos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Indicadores
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
		  <h3 class="card-title"><strong>INDICADORES</strong></h3>
		</div>
		<div class="col-md-12">
			<a href="{{ route('indicators.create') }}" class="float-right fas fa-plus btn btn-fill btn-success b-create"> Crear</a>
		</div>
		<div class="row">
			@foreach($Indicators as $indicator)
				@if($indicator->IndType === 0)
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
									<th class="text-center">Gráfica</th>
									<td class="text-center"><img src="{{Storage::url($indicator->IndGraphic)}}"></td>
								</tr>
							</tbody>
						</table>
						<a method='GET' href="indicators/{{$indicator->id}}" class="btn btn-secondary tim-icons icon-double-right"> Ver Más.</a>
					</div>
				@else
				@endif
			@endforeach
		</div>
	</div>
@endsection