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
                            <div class="col-md-8 col-sm-12">
                                <h3 class="mb-0">{{ __('Gestión de usuarios') }}</h3>
                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="{{ route('user.index') }}" class="btn btn-sm btn-secondary">{{ __('Volver a la lista') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Información de usuario') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-name" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nombre</b>" data-content="Nombre del usuario a ingresar"><i class="far fa-question-circle"></i>{{ __(' Nombre') }}</label>


                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'name'])

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">

                                    <label class="form-control-label" for="input-email" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Correo Electronico</b>" data-content="Ingresar el correo electronico del usuario a ingresar"><i class="far fa-question-circle"></i>{{ __(' Correo Electronico') }}</label>

                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electronico') }}" value="{{ old('email') }}" required>
                                    @include('alerts.feedback', ['field' => 'email'])

                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-roles" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Roles</b>" data-content="Ingresa los roles que le quieres asignar al usuario."><i class="far fa-question-circle"></i>{{ __(' Roles') }}</label>

                                    <select multiple name="roles[]" id="input-role" class="form-control form-control-alternative" placeholder="{{ __('Selecciona los roles del usuario') }}" value="{{ old('roles[]') }}" required autofocus>
                                        @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'PermisosDirectos'])
                                </div>

                                <div class="form-group{{ $errors->has('PermisosDirectos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Permisos Directos') }}</label>
                                    <select multiple name="PermisosDirectos[]" id="input-role" class="form-control form-control-alternative{{ $errors->has('PermisosDirectos') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccione los permisos directos del usuario') }}" value="{{ old('PermisosDirectos[]') }}" autofocus>
                                        @foreach($permisos as $permiso)
                                        <option value="{{$permiso->name}}">{{$permiso->name}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'roles'])
                                </div>

                                <div class="form-group{{ $errors->has('Cargos') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Cargos') }}</label>
                                    <select name="Cargos[]" id="input-role" class="form-control form-control-alternative{{ $errors->has('Cargos') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccione los Cargos del usuario') }}" value="{{ old('Cargos[]') }}" autofocus>
                                        @foreach($cargos as $cargo)
                                        <option value="{{$cargo->id}}">{{$cargo->CargoName}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'Cargos'])
                                </div>

                                <div class="form-group{{ $errors->has('Area') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-roles">{{ __('Area') }}</label>
                                    <select name="Area" id="input-role" class="form-control form-control-alternative{{ $errors->has('Area') ? ' is-invalid' : '' }}" placeholder="{{ __('Seleccione el Area del usuario') }}" value="{{ old('Area') }}" autofocus>
                                        @foreach($areas as $area)
                                        <option value="{{$area->id}}">{{$area->AreaName}}</option>
                                        @endforeach
                                    </select>
                                    @include('alerts.feedback', ['field' => 'Area'])
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-password">{{ __('Contraseña') }}</label>
                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}" value="" required>
                                    @include('alerts.feedback', ['field' => 'password'])
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-password-confirmation">{{ __('Confirmar Contraseña') }}</label>
                                    <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirmar Contraseña') }}" value="" required>
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


@push('js')

    <script type="text/javascript">
    $(document).ready(function() {
        popover();
    });
    function popover(){
        $('[data-toggle="popover"]').popover({
            container: 'body',
            html: true,
            placement: 'auto',
        });
    }
    </script>

@endpush