@extends('layouts.app', ['page' => __('Perfil'), 'pageSlug' => 'profile'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Perfil de usuario
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title pull-left">{{ __('Edit Profile') }}</h5>
                    <button class="btn btn-primary pull-right">Editar roles</button>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nombre</b>" data-content="Nombre del usuario."><i class="far fa-question-circle"></i>{{ __(' Nombre') }}</label>

                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">

                                <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Correo Electronico</b>" data-content="Correo Electronico corresondiente al actual usuario."><i class="far fa-question-circle"></i>{{ __(' Correo Electronico') }}</label>

                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])

                            </div>

                            <div class="form-group{{ $errors->has('Avatar') ? ' has-danger' : '' }}">
                                <label>{{ __('  ') }}</label>
                                <input type="file" id="Avatar" name="Avatar" class="form-control{{ $errors->has('Avatar') ? ' is-invalid' : '' }}" placeholder="{{ __('Avatar') }}" value="{{ old('Avatar', auth()->user()->Avatar) }}">
                                @include('alerts.feedback', ['field' => 'Avatar'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Guardar') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Contraseña') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Contraseña Actual</b>" data-content="Ingrese la contraseña actual de su usuario."><i class="far fa-question-circle"></i>{{ __(' Contraseña Actual') }}</label>

                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña Actual') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Nueva Contraseña</b>" data-content="Ingresar la nueva contraseña que desea asignar al usuario"><i class="far fa-question-circle"></i>{{ __(' Nueva Contraseña') }}</label>

                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva Contraseña') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])

                        </div>
                        <div class="form-group">

                            <label data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Confirmar Nueva Contraseña</b>" data-content="Ingresar la confirmación de contraseña del campo anterior."><i class="far fa-question-circle"></i>{{ __(' Confirmar Nueva Contraseña') }}</label>
                            
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Nueva Contraseña') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Cambiar Contraseña') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            @php
                            $colorblock="";
                            @endphp
                            @switch(Auth::user()->ColorUser)
                                @case(0)
                                    @php
                                    $colorblock="primary";
                                    @endphp
                                    @break
                                @case(1)
                                    @php
                                    $colorblock="blue";
                                    @endphp
                                    @break
                                @case(2)
                                    @php
                                    $colorblock="green";
                                    @endphp
                                    @break
                                @case(3)
                                    @php
                                    $colorblock="red";
                                    @endphp
                                    @break
                                @case(4)
                                    @php
                                    $colorblock="yellow";
                                    @endphp
                                    @break
                                @default
                                    @php
                                    $colorblock="green";
                                    @endphp
                            @endswitch
                            <div class="block block-one-{{$colorblock}}" id="colors1"></div>
                            <div class="block block-two-{{$colorblock}}" id="colors2"></div>
                            <div class="block block-three-{{$colorblock}}" id="colors3"></div>
                            <div class="block block-four-{{$colorblock}}" id="colors4"></div>
                            
                                <img class="avatar" style="width: 20em; height: 15em;" src="{{ auth()->user()->Avatar }}">
                            <a href="#">
                                @auth
                                    @php
                                    $colormainpanel="";
                                    @endphp
                                    @switch(Auth::user()->ColorUser)
                                        @case(0)
                                            @php
                                            $colormainpanel="#86db3e";
                                            @endphp
                                            @break
                                        @case(1)
                                            @php
                                            $colormainpanel="#359fe9";
                                            @endphp
                                            @break
                                        @case(2)
                                            @php
                                            $colormainpanel="#42e7ab";
                                            @endphp
                                            @break
                                        @case(3)
                                            @php
                                            $colormainpanel="red";
                                            @endphp
                                            @break
                                        @case(4)
                                            @php
                                            $colormainpanel="orange";
                                            @endphp
                                            @break
                                        @default
                                            @php
                                            $colormainpanel="green";
                                            @endphp
                                    @endswitch
                                @endauth
                                <i id="iconolapiz" class="tim-icons icon-pencil" style="background: {{$colormainpanel}}; border-radius: 50%; padding: 0.4em 0.4em 0.4em 0.4em; margin: 0em 0em 0em -1.5em; position: relative;" data-placement="auto" data-trigger="hover" data-html="true" data-toggle="popover" title="<b>Cambio de Avatar</b>" data-content="Ingrese una nueva imagen para actualizar su avatar."></i>
                                {{--/images/{{$cita->usuario}}--}}
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                                {{-- <h5 class="title">{{ auth()->user()->name }}</h5>
                                <img class="avatar" src="{{ asset('black') }}/img/emilyz.jpg" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5> --}}
                            </a>
                            <p class="description">
                                {{-- {{ __('Ceo/Co-Founder') }} --}}
                            </p>
                        </div>
                    </p>
                </div>
                <div class="card-footer">
                    {{-- <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $('#iconolapiz').on('click', function(){
        $('#Avatar').click();
    });
</script>
@endpush