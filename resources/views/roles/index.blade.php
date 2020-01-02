@extends('layouts.app', ['page' => __('Roles'), 'pageSlug' => 'roles'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Roles') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">{{ __('Añadir Rol') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="RolesTable">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('rol') }}</th>
                                <th scope="col">{{ __('permisos') }}</th>
                                <th scope="col">{{ __('Creation Date') }}</th>
                                <th scope="col"></th>
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
                                            </ul>
                                        </td>
                                        <td>{{ $role->created_at->format('d/m/Y H:i') }}</td>
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
                                                        @endif
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