@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'users'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Usuarios
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
                        <div class="col-6">
                            <h4 class="card-title">{{ __('Usuarios') }}</h4>
                        </div>
                        @can('createUser')
                        <div class="col-6 text-right">
                            <a href="{{ route('user.create') }}" class="btn btn-sm btn-success fas fa-plus"> {{ __('Crear') }}</a>
                        </div>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter" id="">
                            <thead>
                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Correo Electronico') }}</th>
                                <th scope="col">{{ __('Fecha de creación') }}</th>
                                <th scope="col">{{ __('Roles') }}</th>
                                <th scope="col">{{ __('cargos') }}</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                        </td>
                                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <ul class="list-group list-group-flush">
                                                @foreach($user->roles as $rol)
                                                <li class="list-group-item">{{$rol->name}}</li>
                                                @endforeach  
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="list-group list-group-flush">
                                                @foreach($user->cargos as $cargo)
                                                <li class="list-group-item">{{$cargo->CargoName}}</li>
                                                @endforeach  
                                            </ul>
                                        </td>
                                        {{-- <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        @if (auth()->user()->id != $user->id)
                                                            @can(['updateUser', 'deleteUser'])
                                                            <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a class="dropdown-item" href="{{ route('user.edit', $user) }}">{{ __('Editar') }}</a>
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                            {{ __('Eliminar') }}
                                                                </button>
                                                            </form>
                                                            @endcan
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Editar') }}</a>
                                                        @endif
                                                    </div>
                                                </div>
                                        </td> --}}


                                        @if (auth()->user()->id != $user->id)
                                            @can(['updateUser', 'deleteUser'])
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <form action="{{ route('user.destroy', $user) }}" method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a class="dropdown-item" href="{{ route('user.edit', $user) }}">{{ __('Editar') }}</a>
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                            {{ __('Eliminar') }}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            @else
                                                <td>
                                                    <i class="fas fa-check"></i>
                                                </td>
                                            @endcan
                                        @else
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Editar') }}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif




                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        {{ $users->links() }}
                    </nav>
                </div> --}}
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