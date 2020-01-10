@extends('layouts.app', ['class' => 'login-page', 'page' => __('Login Page'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white card-new" {{-- style="background-color: rgba(29, 245, 0, 0);" --}}>
                <div class="card-header">
                    {{-- <img src="{{ asset('white') }}/img/card-primary.png" alt=""> --}}
                    <h1 class="card-title">{{ __('Intranet') }}</h1>
                </div>
                <div class="card-body">
                    {{-- <p class="text-dark mb-2">Sign in with <strong>admin@white.com</strong> and the password <strong>secret</strong></p> --}}
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}  input-new" placeholder="{{ __('Correo Electronico') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Contraseña') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3">{{ __('Iniciar Sesión') }}</button>
                </div>
            </div>
        </form>
    </div>
@endsection
