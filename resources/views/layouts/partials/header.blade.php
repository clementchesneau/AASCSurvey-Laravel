<header >   
   <nav class="navbar navbar-expand-md  shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/' . app()->getLocale()) }}">
            <img src="{{ asset('img/logo_AASC.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon fas fa-bars fa-2x"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('surveys.create', app()->getLocale()) }}">{{ __('messages.header.create') }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('home', app()->getLocale()) }}">{{ __('messages.header.dashboard') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('surveys.index', app()->getLocale()) }}">{{ __('messages.header.surveys') }}</a>
                        </li>
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ strtoupper(app()->getLocale()) }} <span class="caret"></span>
                        </a>

                        <div id="dropdown-menu-lang" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item px-3 py-2" href="@if(@isset($survey)) {{ route(Route::currentRouteName(), ['fr', $survey]) }} @else {{ route(Route::currentRouteName(), 'fr') }} @endif">{{ __('FR') }}</a>
                            <a class="dropdown-item px-3 py-2" href="@if(@isset($survey)) {{ route(Route::currentRouteName(), ['en', $survey]) }} @else {{ route(Route::currentRouteName(), 'en') }} @endif">{{ __('EN') }}</a>
                            <a class="dropdown-item px-3 py-2" href="@if(@isset($survey)) {{ route(Route::currentRouteName(), ['de', $survey]) }} @else {{ route(Route::currentRouteName(), 'de') }} @endif">{{ __('DE') }}</a>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login', app()->getLocale()) }}">{{ __('messages.header.login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register', app()->getLocale()) }}">{{ __('messages.header.register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right p-2 py-3" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item px-3" href="{{ route('account', app()->getLocale()) }}">{{ __('messages.header.profile') }}</a>
                                <!-- <a class="dropdown-item px-3" href="#">{{ __('messages.header.contacts') }}</a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item px-3" href="{{ route('logout', app()->getLocale()) }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('messages.header.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>