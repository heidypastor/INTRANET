<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'White Dashboard') }}</title>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}/img/favicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet" />
        <!-- CSS -->
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet" />
    </head>
    <body class="white-content {{ $class ?? '' }}">
        @include('layouts.navbars.navbar')
        <div class="wrapper wrapper-full-page">
            <div class="full-page {{ $contentClass ?? '' }}">
                <div class="content">
                    <div class="container">
                        <div class="header py-7 py-lg-8">
                            <div class="container">
                                <div class="header-body text-center mb-7">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5 col-md-6">
                                            <h1 class="text-white">{{ __('Bienvenido!!') }}</h1>
                                            <p class="text-lead text-light">
                                                {{ __('Gestion Documental INTRANET') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>

        <!--  Notifications Plugin    -->
        <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>

        <script src="{{ asset('white') }}/js/white-dashboard.min.js?v=1.0.0"></script>
        <script src="{{ asset('white') }}/js/theme.js"></script>
        {{-- incluido el secript de app.js para el codigo de laravel echo --}}
        <script src="{{ asset('js') }}/app.js"></script>

        @stack('js')

        <script type="text/javascript">
            Echo.private(`user-login`)
                .listen('Userlogin', (e) => {
                    console.log(e.user.name);
                    $.notify({
                        icon: "tim-icons icon-single-02",
                        message: "El Usuario <b>"+e.user.name+" - "+e.user.email+"</b> - a ha iniciado sesión."

                      }, {
                        type: 'info',
                        timer: 4000,
                        placement: {
                          from: 'top',
                          align: 'left'
                        }
                      });
            });

            Echo.channel(`channel-message`)
                .listen('NewMessage', (e) => {
                    console.log(e.message);
            });
        </script>
        
        @stack('js')
    </body>
</html>



