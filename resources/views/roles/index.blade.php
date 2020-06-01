@extends('layouts.app', ['page' => __('Roles'), 'pageSlug' => 'roles'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Roles
@endsection

@push('css')
    <link href="{{ asset('css') }}/datatable-depen.css" rel="stylesheet"/>
    <link href="{{ asset('css') }}/datatable-plugins.css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <h4 class="card-title">{{ __('Lista de Roles') }}</h4>
                        </div>
                        @can('createRole')
                        <div class="col-md-4 col-sm-12 text-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-sm btn-success fas fa-plus"> {{ __('Crear') }}</a>
                        </div>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="RolesTable">
                            <thead>
                                <th scope="col">{{ __('Rol') }}</th>
                                <th scope="col" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Permisos</b>" data-content="Listado de permisos que tienen asignados cada rol."><i class="far fa-question-circle"></i>{{ __(' Permisos') }}</th>
                                <th scope="col">{{ __('Fecha de creación') }}</th>
                                @can('updateRole')
                                <th scope="col">{{ __('Editar')}}</th>
                                @endcan
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <ul class="list-group list-group-flush">
                                                 @foreach($role->permissions as $permission)
                                                <li class="list-group-item">{{$permission->name}}</li>
                                                @endforeach  
                                            </ul><hr>
                                        </td>
                                        <td>{{ $role->created_at->format('d/m/Y H:i') }}</td>
                                        @can('updateRole')
                                        <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @if ($role->name != 'admin')
                                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a class="dropdown-item" href="{{ route('roles.edit', $role->id) }}">{{ __('Editar') }}</a>
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Estas seguro de que deseas eliminar este rol?") }}') ? this.parentElement.submit() : ''">
                                                                            {{ __('Eliminar') }}
                                                                </button>
                                                            </form>
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('roles.edit', $role->id) }}">{{ __('Editar') }}</a>
                                                            <button onclick="editpermisos({{$role->id}}, {{"'".$role->name."'"}}, {{"'".$role->permisos."'"}})" class="btn btn-fill btn-warning" data-toggle="modal" data-target="#editmodalarea">Editar</button>
                                                        @endif
                                                    </div>
                                                </div>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="editpermisos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Permisos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form id="formulariodeedicion" role="form" method="POST" action="" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="box-body">
                              <h3 class="card-title">Editar Permisos</h3>
                            </div>
                            <div class="box-body form-group">
                                <label>Permisos del rol</label>
                                <select class="text-center form-control" required="" name="AreaSede" id="sedeedit">
                                    <option value="Planta">Planta</option>
                                    <option value="Bogota">Bogota</option>
                                </select>
                            </div>                
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-fill btn-warning">Actualizar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{-- {{ $roles->links() }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js') }}/datatable-depen.js"></script>
    <script src="{{ asset('js') }}/datatable-plugins.js"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    /*$(document).ready( function () {
        $('#tabledocuments').DataTable();
    } );*/

    $(document).ready(function() {
        // /*var rol defino el rol del usuario*/
        // var rol = "<?php echo Auth::user()->UsRol; ?>";
        // /*var botoncito define los botones que se usaran si el usuario es programador*/
        // var botoncito = (rol == 'Programador') ? [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'copy', text: 'Copiar'}, {extend: 'excel', text: 'Excel'}, {extend: 'pdf', text: 'Pdf'}, {
        //          extend: 'collection',
        //          text: 'Selector',
        //          buttons: ['selectRows', 'selectCells']
        //      }] : [{extend: 'colvis', text: 'Columnas Visibles'}, {extend: 'excel', text: 'Excel'}];
        /*inicializacion de datatable general*/        
        var table = $('.table').DataTable({
            "dom": "<'row'<'col-md-3'l><'col-md-5'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row'<'col-md-6'i><'col-md-6'p>>",
            "scrollX": false,
            "autoWidth": true,
            // "select": true,
            "colReorder": true,
            "searchHighlight": true,
            "responsive": true,
            "keys": true,
            "lengthChange": true,
            "buttons": [
                // botoncito,
            ],
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "colvis": 'Ajouté au presse-papiers',
            }
        });
        /*funcion para resaltar las busquedas*/
        // var table = $('.table').DataTable();

        table.on('draw', function() {
            var body = $(table.table().body());
            body.unhighlight();
            body.highlight(table.search());
        });
    });
</script>
@endpush