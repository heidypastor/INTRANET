@extends('layouts.app', ['page' => __('Permisos'), 'pageSlug' => 'permisos'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Permisos
@endsection

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-sm-12">
                                <h4 class="card-title mb-0">{{ __('Nuevo permiso') }}</h4>
                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-secondary">{{ __('lista de Permisos') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('permissions.store') }}" autocomplete="off">
                            @csrf

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Crear Rol') }}</h6> --}}
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre del permiso') }}" value="{{ old('name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Roles</b>" data-content="Ingresa los roles que le quieres asignar al usuario."><i class="far fa-question-circle"></i>{{ __(' Roles') }}</label>
                                    @include('alerts.feedback', ['field' => 'roles[]'])
                                    <select multiple class="form-control form-control-alternative{{ $errors->has('roles[]') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccione los permisos para el usuario') }}" name="roles[]">
                                        @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
