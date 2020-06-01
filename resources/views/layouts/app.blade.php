<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <title>{{ config('app.name', 'White Dashboard') }}</title> --}}
        <title>INTRANET - @yield('htmlheader_title', 'section header title here') </title>
        <!-- Favicon -->
        
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('white') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('white') }}@yield('htmlheader_titleicon', '/img/favicon.png')">
        <!-- Fonts -->
        @auth
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
        @endauth

        {{-- Link correspndiente a los nuevos tipos de letra --}}
        @auth
        <link href="https://fonts.googleapis.com/css?family=Inria+Serif:300,300i,400,400i,700,700i|Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        @endauth 
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('white') }}/css/nucleo-icons.css" rel="stylesheet"/>
        <!-- CSS -->
        <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet"/>
        @auth
        <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet"/>
        <link href="{{ asset('css') }}/all.css" rel="stylesheet"/>
        @endauth
        

        {{-- stack de hojas de estilo css --}}
        @stack('css')


        {{-- stilos personalizados ojo con el Important! --}}
        <link href="{{ asset('css') }}/personalizados.css" rel="stylesheet"/>
    </head>
    <body class="white-content {{ $class ?? '' }} tipo-letra">
        @auth()
            <div class="wrapper">
                @php
                $colorsidebar="";
                @endphp
                @switch(Auth::user()->ColorUser)
                    @case(0)
                        @php
                        $colormainpanel="primary";
                        @endphp
                        @break
                    @case(1)
                        @php
                        $colormainpanel="blue";
                        @endphp
                        @break
                    @case(2)
                        @php
                        $colormainpanel="green";
                        @endphp
                        @break
                    @case(3)
                        @php
                        $colormainpanel="red";
                        @endphp
                        @break
                    @case(4)
                        @php
                        $colormainpanel="yellow";
                        @endphp
                        @break
                    @default
                        @php
                        $colormainpanel="green";
                        @endphp
                @endswitch
                
                @include('layouts.navbars.sidebar')
                <div class="main-panel" data="{{$colormainpanel}}">
                    @include('layouts.navbars.navbar')

                    {{-- estructura de contenido --}}
                    {{-- @include('layouts.partials.loading') --}}
                    <div class="content" id="contenido" style="display: none;">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>

                    @include('layouts.footer')
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            @include('layouts.navbars.navbar')
            <div class="wrapper wrapper-full-page">
                <div class="full-page {{ $contentClass ?? '' }}">
                    <div class="imagen-fondo col-lg-12 col-xs-1 col-md-12"></div>
                    <div class="degradado col-lg-4 col-xs-12 col-md-12"></div>
                    <div id="particles-js" class="col-lg-5 col-xs-12 col-md-12 ml-1"></div>
                    <div class="content">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                    {{-- @include('layouts.footer') --}}
                </div>
            </div>
        @endauth
        @auth()
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                <li class="header-title"> Escoge un color</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
                        <span class="badge filter badge-primary @auth {{ Auth::user()->ColorUser === 0 ? "active" : "" }} @endauth" data-color="primary"></span>

                        <span class="badge filter badge-info @auth {{ Auth::user()->ColorUser === 1 ? "active" : "" }} @endauth" data-color="blue"></span>

                        <span class="badge filter badge-success @auth {{ Auth::user()->ColorUser === 2 ? "active" : "" }} @endauth" data-color="green"></span>

                        <span class="badge filter badge-danger @auth {{ Auth::user()->ColorUser === 3 ? "active" : "" }} @endauth" data-color="red"></span>

                        <span class="badge filter badge-warning @auth {{ Auth::user()->ColorUser === 4 ? "active" : "" }} @endauth" data-color="yellow"></span>
                    </div>
                    <div class="clearfix"></div>
                    </a>
                </li>
                </ul>
            </div>
        </div>
        @endauth
        <script src="{{ asset('white') }}/js/core/jquery.min.js"></script>
        @auth
        <script src="{{ asset('white') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('white') }}/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('white') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>


        {{-- <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> --}}


        <!--  Google Maps Plugin    -->
        <!-- Place this tag in your head or just before your close body tag. -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
        <!-- Chart JS -->
        {{-- <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script> --}}
        <!--  Notifications Plugin    -->
        <script src="{{ asset('white') }}/js/plugins/bootstrap-notify.js"></script>

        <script src="{{ asset('white') }}/js/white-dashboard.min.js?v=1.0.0"></script>
        <script src="{{ asset('white') }}/js/theme.js"></script>
        {{-- incluido el secript de app.js para el codigo de laravel echo --}}
        <script src="{{ asset('js') }}/app.js"></script>
        <script src="{{ asset('js') }}/all.js"></script>
        @endauth

        @stack('js')

        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
                    $navbar = $('.navbar');
                    $main_panel = $('.main-panel');

                    $full_page = $('.full-page');
                    $colors1 = $('#colors1');
                    $colors2 = $('#colors2');
                    $colors3 = $('#colors3');
                    $colors4 = $('#colors4');
                    $iconolapiz = $('#iconolapiz');

                    $sidebar_responsive = $('body > .navbar-collapse');
                    sidebar_mini_active = true;
                    white_color = false;

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    $('.fixed-plugin a').click(function(event) {
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });

                    $('.fixed-plugin .background-color span').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');

                        var new_color = $(this).data('color');

                        if ($sidebar.length != 0) {
                            $sidebar.attr('data', new_color);
                        }

                        if ($main_panel.length != 0) {
                            $main_panel.attr('data', new_color);
                        }

                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }

                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data', new_color);
                        }

                        $colors1.removeClass(); 
                        $colors1.addClass('block');
                        $colors1.addClass('block-one-'+new_color);

                        $colors2.removeClass(); 
                        $colors2.addClass('block');
                        $colors2.addClass('block-two-'+new_color);

                        $colors3.removeClass(); 
                        $colors3.addClass('block');
                        $colors3.addClass('block-three-'+new_color);

                        $colors4.removeClass(); 
                        $colors4.addClass('block');
                        $colors4.addClass('block-four-'+new_color);

                        switch(new_color) {
                            case "primary":
                            $iconolapiz.css('background',"#86db3e");
                            break;
                            case "blue":
                            $iconolapiz.css('background',"#359fe9");
                            break;
                            case "green":
                            $iconolapiz.css('background',"#42e7ab");
                            break;
                            case "red":
                            $iconolapiz.css('background',"red");
                            break;
                            case "yellow":
                            $iconolapiz.css('background',"orange");
                            break;
                          default:
                            // code block
                        }


                        // if (new_color == "primary") {
                        //     $iconolapiz.css('background',"pink");
                        // }else{
                        //     $iconolapiz.css('background',new_color);
                        // }

                        var colorespañol ="";

                        switch(new_color) {
                          case "primary":
                            colorespañol ="verde";                                
                            break;
                          case "blue":
                            colorespañol ="azul";
                            break;
                          case "green":
                            colorespañol ="turquesa";                                
                            break;
                          case "red":
                            colorespañol ="rojo";                                
                            break;
                          case "yellow":
                            colorespañol ="amarillo";                                
                            break;
                          default:
                            colorespañol ="";
                        } 
                        @auth
                          $.notify({
                            icon: "tim-icons icon-palette",
                            message: "Su color a sido actualizado correctamente por el color "+colorespañol

                          }, {
                            type: 'info',
                            timer: 8000,
                            placement: {
                              from: 'top',
                              align: 'left'
                            }
                          });
                        @endauth
                    }); 

                    $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                        var $btn = $(this);

                        if (sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            sidebar_mini_active = false;
                            whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
                        } else {
                            $('body').addClass('sidebar-mini');
                            sidebar_mini_active = true;
                            whiteDashboard.showSidebarMessage('Sidebar mini activated...');
                        }

                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);

                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
                    });

                    $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                            var $btn = $(this);

                            if (white_color == true) {
                                $('body').addClass('change-background');
                                setTimeout(function() {
                                    $('body').removeClass('change-background');
                                    $('body').removeClass('white-content');
                                }, 900);
                                white_color = false;
                            } else {
                                $('body').addClass('change-background');
                                setTimeout(function() {
                                    $('body').removeClass('change-background');
                                    $('body').addClass('white-content');
                                }, 900);

                                white_color = true;
                            }
                    });

                    $('.light-badge').click(function() {
                        $('body').addClass('white-content');
                    });

                    $('.dark-badge').click(function() {
                        $('body').removeClass('white-content');
                    });
                });
            });
        </script>
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

        <script type="text/javascript">
        $(document).ready(function(){
            $(".fixed-plugin .background-color span").click(function(e){
                var new_color = $(this).data('color');
                console.log(new_color);
                e.preventDefault();
                $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
                });

                @auth
                    $.ajax({
                        url: "{{url('/cambiodecolor')}}/"+{{Auth::user()->id}}+"/color/"+new_color,
                        method: 'GET',
                        data:{},
                        beforeSend: function(){
                            $(this).prop('disabled', true);
                        },
                        success: function(res){
                            console.log(res);
                        },
                        complete: function(){
                        }
                    });
                @endauth
            });
        });
        </script>        
        <script type="text/javascript">
            /*$(document).ready(function(){
                $("#searchallmodelinput").change(function(e){
                    id=$("#searchallmodelinput").val();
                    e.preventDefault();
                    $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                      }
                    });
                    $.ajax({
                        url: "{{url('search')}}/"+id,
                        method: 'GET',
                        data:{},
                        beforeSend: function(){
                            // $(".load").append('<i class="fas fa-sync-alt fa-spin"></i>');
                            // $("#municipio").prop('disabled', true);
                        },
                        success: function(res){
                            $("#resultList").empty();
                            if (res['users'].length > 0||res['documents'].length > 0||res['indicators'].length > 0||res['releases'].length > 0) {
                                for(var i = res['users'].length -1; i >= 0; i--){
                                    $("#resultList").append(`<a class="dropdown-item" href="../../../user/`+res['users'][i].id+`/edit">${res['users'][i].name}</a>`);
                                }
                                for(var i = res['documents'].length -1; i >= 0; i--){
                                    $("#resultList").append(`<a class="dropdown-item" href="../../../documents/`+res['documents'][i].id+`/edit">${res['documents'][i].DocName}</a>`);
                                }
                                for(var i = res['indicators'].length -1; i >= 0; i--){
                                    $("#resultList").append(`<a class="dropdown-item" href="../../../indicators/`+res['indicators'][i].id+`">${res['indicators'][i].IndName}</a>`);
                                }
                                for(var i = res['releases'].length -1; i >= 0; i--){
                                    $("#resultList").append(`<a class="dropdown-item" href="../../../releases/`+res['releases'][i].id+`">${res['releases'][i].RelName}</a>`);
                                }
                            }else{
                                    $("#resultList").append(`<a class="list-group-item" value="">No se encontro información relacionada con este término de busqueda</li>`);
                            }
                        },
                        complete: function(){
                            // $(".load").empty();
                            // $("#municipio").prop('disabled', false);
                        }
                    })
                });
            });*/
        </script>
        @auth
        <script type="text/javascript">
            window.onload =function(){
                $('#my-slider').resize();
                $('#contenedor_carga').css('opacity', '0');
                $('#contenido').fadeIn(2000);
                setTimeout(function(){
                $('#contenedor_carga').remove();
                }, 2000);
            }
        </script>
        @endauth
        @auth
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
        @endauth

        @stack('scripts')
    </body>
</html>
