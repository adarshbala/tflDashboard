<nav class="navbar navbar-expand-md navbar-light navbar-laravel " style="background-color:orange;">
        <div class="container">
            <a style="font-size:20px;font-weight:bold;padding-right:10px;padding-left:10px;" class="navbar-brand" href="{{ url('/') }}">
                {{ __('Home') }}
            </a>
            <a style="font-size:20px;font-weight:bold;padding-right:10px;padding-left:10px;" class="navbar-brand" href="{{ url('/about') }}">
                {{ __('About') }}
            </a>
            <a style="font-size:20px;font-weight:bold;padding-right:10px;padding-left:10px;" class="navbar-brand" href="{{ url('/services') }}">
                {{ __('Services') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li style="font-size:20px;font-weight:bold;"class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>                                
                        </li>
                       {{--  <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li> --}}
                    @else
                        <li class="nav-item dropdown">
                            <a style="font-size:20px; font-weight:bold;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>