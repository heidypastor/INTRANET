@extends('layouts.app', ['page' => __('Roles'), 'pageSlug' => 'roles'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Roles
@endsection

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-sm-12">
                                <h4 class="card-title mb-0">{{ __('Edición de Rol') }}</h4>
                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="{{ route('roles.index') }}" class="btn btn-sm btn-primary">{{ __('lista de roles') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('roles.update', $role) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Actualizar Rol') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $role->name) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('permissions[]') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-permissions" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Permisos</b>" data-content="Ingresa los permisos que le quieres asignar al usuario."><i class="far fa-question-circle"></i>{{ __(' Permisos') }}</label>

                                    @include('alerts.feedback', ['field' => 'permissions[]'])
                                    <select multiple class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccione los permisos para el usuario') }}" value="{{ old('name', $role->name) }}" name="permissions[]">
                                        @foreach($permissions as $permission)
                                        <option value="{{$permission->name}}">{{$permission->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Actualizar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
