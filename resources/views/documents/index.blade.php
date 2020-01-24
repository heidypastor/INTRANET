@extends('layouts.app', ['page' => __('Documentos'), 'pageSlug' => 'documents'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Documentos
@endsection

@section('content')
	<div class="card">
		<div class="card-header text-center">
		  <h4 class="card-title">Documentos</h4>
		</div>


		@hasrole('Super Admin')
			<div class="card-body text-left">
				  <a href="{{ route('documents.create') }}" class="fas fa-plus btn btn-fill btn-success"> Crear</a>
				</div>
		@else
			
		@endhasrole


		<div class="card-body">
			<div class="table-responsive table-upgrade">
				<table class="table table-compact display" id="tabledata">
				  <thead>
				    <th class="text-center">Nombre</th>
				    <th class="text-center">Archivo</th>
				    <th class="text-center">Versión</th>
				    <th class="text-center">Tamaño Archivo</th>
				    <th class="text-center">Publicado</th>
				    <th class="text-center">Tipo de documento</th>
				    <th class="text-center">áreas</th>
				    @hasrole('Super Admin')
				    	<th class="text-center">Editar</th>
				    @else
				    	
				    @endhasrole
				  </thead>
				  <tbody>
				  	@foreach($Documents as $Document)
				      <tr>
				        <td class="text-center">{{$Document->DocName}}</td>
				        <td class="text-center"><a target="_blank" href="{{Storage::url($Document->DocSrc)}}">{{$Document->DocOriginalName}}</td>
			        	<td class="text-center">{{$Document->DocVersion}}</td>
			        	<td class="text-center">{{$Document->DocSize}}</td>
			        	<td class="text-center">{{ $Document->DocPublisher === 0 ? "No Publicado" : "Publicado" }}</td>
			        	<td class="text-center">{{$Document->DocType}}</td>
			        	<td class="text-center">
			        		<ul class="list-group list-group-flush">
			        		     @foreach($Document->areas as $area)
			        		    <li class="list-group-item" style="background-color: #f5f6fa;"><font color="#525f7f">{{$area->AreaName}}</font></li>
			        		    @endforeach  
			        		</ul>
			        	</td>
			        	@hasrole('Super Admin')
			        		<td class="text-center"><a href="documents/{{$Document->id}}/edit" class="btn btn-fill btn-warning far fa-edit"> Editar</a></td>
			        	@else
			        		
			        	@endhasrole
				      </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready( function () {
        $('#tabledocuments').DataTable();
    } );
</script>
@endpush