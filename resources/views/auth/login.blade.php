@extends('layouts.app', ['class' => 'login-page', 'page' => __(''), 'contentClass' => 'login-page'])

@section('htmlheader_titleicon')
/img/LogoProsarc.ico
@endsection

@section('htmlheader_title')
Inicio de sesión
@endsection

@section('content')
    <div class="col-lg-3 col-md-6 ml-1s col-sm-8 position-login">
        <form class="form texto-login" method="post" action="{{ route('login') }}" style="margin: -25px 25px 0px 0px;">
            @csrf
            <div class="card card-login card-white card-new" {{-- style="background-color: rgba(29, 245, 0, 0);" --}}>
                    <div class="card-header">
                        {{-- <img src="{{ asset('white') }}/img/card-primary.png" alt=""> --}}
                        <h1 id="font-type">{{ __('Intranet') }}</h1>
                        <img id="logo-prosarc" src="white/img/logo_nuevo.png" width="110px" height="110px">
                    </div>
                    <div class="card-body">
                        {{-- <p class="text-dark mb-2">Sign in with <strong>admin@white.com</strong> and the password <strong>secret</strong></p> --}}
                        <div class="input-group input-big{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text input-new">
                                    <i class="fas fa-at" id="font-color"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="color-placeholder form-control{{ $errors->has('email') ? ' is-invalid' : '' }}  input-new" placeholder="{{ __('Correo Electronico') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group input-big{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text input-new">
                                   <i class="tim-icons icon-lock-circle" id="font-color"></i>
                                </div>
                            </div>
                            <input type="password" placeholder="{{ __('Contraseña') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-new color-placeholder">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" href="" class="btn btn-info btn-lg btn-block mb-3">{{ __('Iniciar Sesión') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
        <script src="{{ asset('js') }}/particles.js"></script>
@endpush
@push('scripts')
        <script src="{{ asset('js') }}/particulas.js"></script>
@endpush
