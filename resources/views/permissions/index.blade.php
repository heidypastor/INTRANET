@extends('layouts.app', ['page' => __('Permisos'), 'pageSlug' => 'permisos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Permisos
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Lista de Permisos') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('permissions.create') }}" class="btn btn-sm btn-success">{{ __('Añadir Permiso') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="RolesTable">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('Id') }}</th>
                                <th scope="col">{{ __('nombre') }}</th>
                                <th scope="col">{{ __('Roles') }}</th>
                                <th scope="col">{{ __('Fecha de Creación') }}</th>
                                <th scope="col"></th>
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