@extends('layouts.app', ['page' => __('Usuarios'), 'pageSlug' => 'users'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Usuarios
@endsection

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('User Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.update', $user) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', $user->name) }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $user->email) }}" required>
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('roles') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Roles') }}</label>
                                    <select multiple name="roles[]" id="input-role" class="form-control form-control-alternative{{ $errors->has('roles') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccion los roles del usuario') }}" value="{{ old('roles', $user->roles) }}" required autofocus>
                                        @foreach($roles as $role)
                                        <option 
                                        @foreach ($user->roles as $rolesdeusuario)
                                        {{ $role->name == $rolesdeusuario->name ? 'Selected' : ""}} 
                                        @endforeach
                                        value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'roles'])
                                </div>

                                <div class="form-group{{ $errors->has('PermisosDirectos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Permisos Directos') }}</label>
                                    <select multiple name="PermisosDirectos[]" id="input-role" class="form-control form-control-alternative{{ $errors->has('PermisosDirectos') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccion los permisos directos del usuario') }}" value="{{ old('PermisosDirectos', $user->PermisosDirectos) }}" autofocus>
                                        @foreach($permisos as $permiso)
                                        <option 
                                        @foreach ($user->permissions as $permisosdeusuario)
                                        {{ $permiso->name == $permisosdeusuario->name ? 'Selected' : ""}}
                                        @endforeach
                                        value="{{$permiso->name}}">{{$permiso->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'roles'])
                                </div>
                                <div class="form-group{{ $errors->has('Cargos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Cargos') }}</label>
                                    <select multiple name="Cargos[]" id="input-role" class="form-control form-control-alternative{{ $errors->has('Cargos') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccion los Cargos del usuario') }}" value="{{ old('Cargos[]') }}" autofocus>
                                        @foreach($cargos as $cargo)
                                        <option 
                                        @foreach ($user->cargos as $cargodelusuario)
                                        {{ $cargodelusuario->id == $cargo->id ? 'Selected' : ""}}
                                        @endforeach
                                        value="{{$cargo->id}}">{{$cargo->CargoName}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'Cargos'])
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">
                                    @include('alerts.feedback', ['field' => 'password'])
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
