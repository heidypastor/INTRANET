@extends('layouts.app', ['page' => __('Comunicados'), 'pageSlug' => 'releases'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Comunicados
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
		  <h4 class="card-title">Comunicados</h4>
		</div>

		<div class="text-left">
		  <form action="{{ route('releases.destroy', $release) }}" method="POST" class="pull-right">
		    @method('DELETE')
		    @csrf 
		      <button type="submit" class="btn btn-danger fas fa-trash"> Eliminar</button>
		  </form>
		</div>

		<div class="text-right" style="margin: -3em 100em 0em 2em;">
			<a href="{{$release->id}}/edit" class="btn btn-fill btn-success far fa-edit"> Editar</a> 
		</div>

		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		  	<div style="background: #e7e7e7; border-radius: 5%; margin: 1em 1em 1em 1em">
			    <table class="table">
					<thead>
						<th></th>
						<th class="text-center">Nombre</th>
						<th class="text-center"><h4>{{$release->RelName}}</h4></th>
					</thead>
					<tbody>
			      	<tr>
			      		<td></td>
			      		<th class="text-center">Imagen</th>
			      		<td class="text-center"><p> <img style="width: 20em; height: 15em; margin: 1.5em 1.5em 1.5em 1.5em; width: 40em; height: 20em;" src="{{Storage::url($release->RelSrc)}}"> </p></td>
			      	</tr>
					<tr>
						<td></td>
						<th class="text-center">Mensaje</th>
						<td class="text-center"><p> {{$release->RelMessage}} </p></td>
					</tr>
					<tr>
						<td></td>
						<th class="text-center">Fecha de publicación</th>
						<td class="text-center"><p> {{$release->RelDate}} </p></td>
					</tr>
					<tr>
						<td></td>
						<th class="text-center">Tipo de Anuncio</th>
						<td class="text-center"><p> {{$release->RelType}} </p></td>
					</tr>
			      </tbody>
			    </table>
			</div>
		  </div>
		</div>
	</div>
@endsection