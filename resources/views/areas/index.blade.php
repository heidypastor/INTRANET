@extends('layouts.app', ['page' => __('Áreas'), 'pageSlug' => 'areas'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Áreas
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
		  <h4 class="card-title">Listado de Áreas</h4>
		</div>
		<div>

			@can('createAreas')
				<button class="fas fa-plus btn btn-sm btn-fill btn-success b-create" data-toggle="modal" data-target="#createmodalarea"> Crear</button>
			@endcan

			{{-- Parte del documento de la creación de áreas --}}

			<div class="modal fade" id="createmodalarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Áreas</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			          <form role="form" method="POST" action="{{ route('areas.store') }}" enctype="multipart/form-data">
			          	@csrf
			            <div class="box-body">
			              <h3 class="card-title">Creación de Áreas</h3>
			            </div>
			            <div class="form-group">
			              <label>Nombre del Área</label>
			              <input name="AreaName" type="text" placeholder="Ej: Sistemas" class="text-center form-control" required="">
			            </div>
			            <div class="form-group">
			                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Sede del Área</b>" data-content="Sede a la que corresponde el área en cuestión."><i class="far fa-question-circle"></i> Sede del Área</label>
			            	<select class="text-center form-control" required="" name="AreaSede" id="sedeedit">
	                    		<option value="Planta">Planta</option>
	                    		<option value="Bogota">Bogota</option>
	                    	</select>
			            </div>		          
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="fas fa-times btn btn-secondary" data-dismiss="modal"> Cancelar</button>
			        <button type="submit" class="btn btn-fill btn-primary"> Guardar</button>
			      </div>
			      </form>
			    </div>
			  </div>
			</div>
		</div>


		{{-- Parte del documento del index  --}}
		@include('alerts.success')

		<div class="card-body">
		  <div class="table-responsive table-upgrade">
		    <table class="table">
		      <thead>
		        <th class="text-center">Nombre Área</th>
		        <th class="text-center">Sede Área</th>
		        <th class="text-center">Editar</th>
		      </thead>
		      <tbody>
		      	@foreach($Areas as $Area)
		          <tr>
		            <td class="text-center">{{$Area->AreaName}}</td>
		            <td class="text-center">{{$Area->AreaSede}}</td>
		            <td class="text-center"><button onclick="actualizarArea({{$Area->id}}, {{"'".$Area->AreaName."'"}}, {{"'".$Area->AreaSede."'"}})" class="btn btn-fill btn-warning far fa-edit" data-toggle="modal" data-target="#editmodalarea"> Editar</button></td>
		          </tr>
		        @endforeach



		        {{-- Parate del documento de la edición de áreas --}}


		        <div class="modal fade" id="editmodalarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		          <div class="modal-dialog" role="document">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Áreas</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
		                  <form id="formulariodeedicion" role="form" method="POST" action="" enctype="multipart/form-data">
		                  	@method('PUT')
		                  	@csrf
		                    <div class="box-body">
		                      <h3 class="card-title">Editar Área</h3>
		                    </div>
		                    <div class="box-body form-group">
		                      <label>Nombre del Área</label>
		                      <input name="AreaName" type="text" placeholder="Ej: Sistemas" id="nameedit" value="" class="text-center form-control" required="">
		                    </div>
		                    <div class="box-body form-group">
		                        <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Sede del Área</b>" data-content="Sede a la que corresponde el área en cuestión."><i class="far fa-question-circle"></i> Sede del Área</label>
		                    	<select class="text-center form-control" required="" name="AreaSede" id="sedeedit">
		                    		<option value="Planta">Planta</option>
		                    		<option value="Bogota">Bogota</option>
		                    	</select>
		                    </div>		          
		              </div>
		              <div class="modal-footer">
		                <button type="submit" class="btn btn-fill btn-primary ">Guardar</button>
		                {{-- </form>
		                	<form id="eliminararea" action="" method="POST" class="pull-right">
		                		@method('DELETE')
		                		@csrf
		                  	<button type="submit" class="btn btn-danger fas fa-trash" onclick="eliminarArea({{$Area->id}})"> Eliminar</button>
		                  	</form> --}}
		              </div>
		            </div>
		          </div>
		        </div>
		      </tbody>
		    </table>
		  </div>
		</div>
	</div>
@endsection
@push('scripts')
<script>
    function actualizarArea(id, area, sede){
        $('#formulariodeedicion').attr('action','areas/'+id);
        $('#nameedit').val(area);
        $('#sedeedit').val(sede);
    };
</script>
<script>
    function eliminarArea(id){
        $('#eliminararea').attr('action','areas/'+id);
    };
</script>
@endpush
