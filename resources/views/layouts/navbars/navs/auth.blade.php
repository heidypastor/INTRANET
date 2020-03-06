<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#">{{ $page ?? __('Dashboard') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
                <li class="search-bar input-group">
                    {{-- <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                        <span class="d-lg-none d-md-block">{{ __('Search') }}</span>
                    </button> --}}

                    <a href="{{ route('prosarc.search') }}" class="btn btn-link"><i class="tim-icons icon-zoom-split"></i>
                        <span class="d-lg-none d-md-block">{{ __('Search') }}</span>
                    </a>
                </li>
                {{-- <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="notification d-none d-lg-block d-xl-block"></div>
                        <i class="tim-icons icon-sound-wave"></i>
                        <p class="d-lg-none"> {{ __('Notifications') }} </p>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('Mike John responded to your email') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('You have 5 more tasks') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('Your friend Michael is in town') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('Another notification') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="#" class="nav-item dropdown-item">{{ __('Another one') }}</a>
                        </li>
                    </ul>
                </li> --}}
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="{{ auth()->user()->Avatar }}" alt="{{ __('Profile Photo') }}">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none">{{ __('Log out') }}</p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Perfil') }}</a>
                        </li>
                        <li class="nav-link">
                            <a href="http://intranet.test/home" class="nav-item dropdown-item">{{ __('Inicio') }}</a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchallmodelinput" aria-label="Text input with dropdown button" placeholder="{{ __('Buscar') }}" name="search" autocomplete="false" style="border: solid 1px; border-color: #e9ecef">
                   {{--  <div class="input-group-append">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                        <div id="typesearch" class="dropdown-menu">
                            <a class="dropdown-item" href="#">Todos</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Indicadores</a>
                            <a class="dropdown-item" href="#">Documentos</a>
                            <a class="dropdown-item" href="#">Noticias</a>
                            <a class="dropdown-item" href="#">Usuarios</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="modal-body h-0">
                <div class="dropdown-menu show w-100" id="resultList">
                  <a class="dropdown-item" href="#">Regular link</a>
                  <a class="dropdown-item active" href="#">Active link</a>
                  <a class="dropdown-item" href="#">Another link</a>
                </div>                
            </div>
        </div>
    </div>
</div>
