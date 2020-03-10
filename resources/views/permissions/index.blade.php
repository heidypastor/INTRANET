@extends('layouts.app', ['page' => __('Permisos'), 'pageSlug' => 'permisos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Permisos
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
                            <h4 class="card-title">{{ __('Lista de Permisos') }}</h4>
                        </div>
                        <div class="col-md-4 col-sm-12 text-right">
                            @can('createPermissions')
                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-success">{{ __('Añadir Permiso') }}</a>
                            @endcan
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="RolesTable">
                            <thead>
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('nombre') }}</th>
                                <th scope="col" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Roles</b>" data-content="Listado de roles con su respectivo permiso."><i class="far fa-question-circle"></i>{{ __(' Roles') }}</th>
                                <th scope="col">{{ __('Fecha de Creación') }}</th>
                                @can('updatePermissions')
                                <th scope="col"></th>
                                @endcan
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <ul>
                                            @foreach( $permission->roles as $role)
                                                <li>{{ $role->name }}</li>
                                            @endforeach
                                            </ul>
                                        </td>
                                        <td>{{ $permission->created_at->format('d/m/Y H:i') }}</td>
                                        <td class="text-right">
                                            @can('updatePermissions')
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        <a class="dropdown-item" href="{{ route('permissions.edit', $permission->id) }}">{{ __('Editar') }}</a>
                                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("Estas seguro de que deseas eliminar este permiso?") }}') ? this.parentElement.submit() : ''">
                                                                        {{ __('Eliminar') }}
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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