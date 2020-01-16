@extends('layouts.app', ['page' => __('Comites'), 'pageSlug' => 'comites'])

@section('content')
	
	<div class="card-header text-center">
	  <h4 class="card-title">Cómites</h4>
	</div>

	<div class="text-left">
	  <form action="{{ route('comites.destroy', $comite) }}" method="POST" class="pull-right">
	    @method('DELETE')
	    @csrf 
	      <button type="submit" class="far fa-trash btn btn-danger"> Eliminar</button>
	  </form>
	</div>

	<div class="text-right">
		<a href="{{$comite->id}}/edit" class="btn btn-fill btn-success far fa-edit"> Editar</a> 
	</div>


	<div class="card-body">
	  <div class="table-responsive table-upgrade">
	  	<div style="background: #e7e7e7; border-radius: 5%; margin: 1em 1em 1em 1em">
		    <table class="table">
				<thead>
					<th></th>
					<th class="text-center">Nombre</th>
					<th class="text-center"><h4>{{$comite->ComiName}}</h4></th>
				</thead>
				<tbody>
		      	<tr>
		      		<td></td>
		      		<th class="text-center">Imagen del cómite</th>
		      		<td class="text-center"><p> <img style="width: 20em; height: 15em; margin: 1.5em 1.5em 1.5em 1.5em; width: 40em; height: 20em;" src="{{Storage::url($comite->ComiSrc)}}"> </p></td>
		      	</tr>
				<tr>
					<td></td>
					<th class="text-center">Foto del cómite</th>
					<td class="text-center"><p> <img style="width: 20em; height: 15em; margin: 1.5em 1.5em 1.5em 1.5em; width: 40em; height: 20em;" src="{{Storage::url($comite->ComiImage)}}"> </p></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Función del cómite</th>
					<td class="text-center"><p> {{$comite->ComiParaQueSirve}} </p></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Telefono de contacto</th>
					<td class="text-center"><p> {{$comite->ComiTelefono}} </p></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Email de contacto</th>
					<td class="text-center"><p> {{$comite->ComiEmail}} </p></td>
				</tr>
				<tr>
					<td></td>
					<th class="text-center">Integrantes</th>
					<td class="text-center">
						@foreach($integrantes as $integrante)
						<br>{{$integrante->name}}
						@endforeach
					</td>
				</tr>
		      </tbody>
		    </table>
		</div>
	  </div>
	</div>

@endsection