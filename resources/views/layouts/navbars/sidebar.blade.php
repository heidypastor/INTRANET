    @php
    $colorsidebar="";
    @endphp
    @switch(Auth::user()->ColorUser)
        @case(0)
            @php
            $colorsidebar="primary";
            @endphp
            @break
        @case(1)
            @php
            $colorsidebar="blue";
            @endphp
            @break
        @case(2)
            @php
            $colorsidebar="green";
            @endphp
            @break
        @case(3)
            @php
            $colorsidebar="red";
            @endphp
            @break
        @case(4)
            @php
            $colorsidebar="yellow";
            @endphp
            @break
        @default
            @php
            $colorsidebar="green";
            @endphp
    @endswitch
<div class="sidebar" data="{{$colorsidebar}}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('IN') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('INTRANET') }}</a>
        </div>
        <ul class="nav">
            {{-- <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li> --}}
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            {{-- <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> --}}
            {{-- <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li> --}}
            {{-- <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }}">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p> 
                </a>
            </li> --}}

            <li class=" {{ $pageSlug == 'areas' ? 'active' : '' }}">
                <a href="{{ route('areas.index') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>{{ __('Áreas') }}</p> 
                </a>
            </li>

            <li class=" {{ $pageSlug == 'indicators' ? 'active' : '' }}">
                <a href="{{ route('indicators.index') }}">
                    <i class="tim-icons icon-chart-bar-32"></i>
                    <p>{{ __('Indicators') }}</p> 
                </a>
            </li>
        </ul>
    </div>
</div>
