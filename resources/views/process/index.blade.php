@extends('layouts.app', ['page' => __('Procesos'), 'pageSlug' => 'procesos'])

@section('htmlheader_titleicon')
/img/favicon.png
@endsection

@section('htmlheader_title')
Procesos
@endsection

@section('content')

	<div class="card-header text-center">
	  <h4 class="card-title">Procesos</h4>
	</div>

	<div class="card-body text-left">
	  <a href="{{ route('procesos.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
	</div>

	<div class="card-body">
		<div class="table-responsive table-upgrade">
			<table class="table table-compact display" id="tableProcesses">
			  <thead>
			    <th class="text-center">Nombre</th>
			    <th class="text-center">Revisión</th>
			    <th class="text-center">Descripción ultimo cambio</th>
			    <th class="text-center">Objetivo</th>
			    <th class="text-center">Imagen</th>
			    <th class="text-center">Responsable</th>
			    <th class="text-center">Autoridad</th>
			    <th class="text-center">Requisitos</th>
			    <th class="text-center">Recursos Necesarios</th>
			    <th class="text-center">Elaborado por:</th>
			    <th class="text-center">Revisado por:</th>
			    <th class="text-center">Aprobado por:<</th>
			    <th class="text-center">Creado el:</th>
			    <th class="text-center">Actualizado el:</th>
			    <th class="text-center">Editar</th>
			  </thead>
			  <tbody>
			  	@foreach($procesos as $proceso)
			      <tr>
			        <td class="text-center">{{$proceso->ProcName}}</td>
			        <td class="text-center">{{$proceso->ProcRevVersion}}</td>
			        <td class="text-center">{{$proceso->ProcChangesDescription}}</td>
			        <td class="text-center">{{$proceso->ProcObjetivo}}</td>
			        <td class="text-center">{{$proceso->ProcImage}}</td>
			        <td class="text-center"><a target="_blank" href="{{Storage::url($proceso->ProcImage)}}">{{$proceso->ProcImage}}</td>
			        <td class="text-center">{{$proceso->ProcResponsable}}</td>
			        <td class="text-center">{{$proceso->ProcAutoridad}}</td>
			        <td class="text-center">{{$proceso->ProcRequsitos}}</td>
			        <td class="text-center">{{$proceso->ProcRecursos}}</td>
			        <td class="text-center">{{$proceso->ProcElaboro}}</td>
			        <td class="text-center">{{$proceso->ProcReviso}}</td>
			        <td class="text-center">{{$proceso->ProcAprobo}}</td>
			        <td class="text-center">{{$proceso->created_at}}</td>
			        <td class="text-center">{{$proceso->updated_at}}</td>
		        	<td class="text-center"><a href="procesos/{{$proceso->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
			      </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready( function () {
        $('#tableProcesses').DataTable();
    } );
</script>
@endpush