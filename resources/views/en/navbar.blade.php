<nav class="navbar navbar-expand-md navbar-light navbar-laravel align-self-center" 
style="z-index:500; background-color: white; max-height: 44px !important; width: 100% !important; padding:0 !important;">
    <div class="container" style="padding:0 !important;">

        <li class="nav-item bg-success" style="list-style: none; margin-left: unset !important; ">
            <a class="navbar-brand " href="{{ url('/en/') }}" id="nav-brand" style=" transition: 0.2s !important;">
                {{ _('Home') }}
            </a>
        </li>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                
                <!--<li class="nav-item bg-primary" style="">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('සංඛ්‍යාන දත්ත') }}</a>
                </li>-->
                
                <li class="nav-item bg-danger" style="">
                    <a class="nav-link" href="{{ url('/en/about')  }}">{{ __('About Us') }}</a>
                </li>
                <li class="nav-item bg-primary dropdown" style="">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Publications') }}
                    </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/policy')  }}">
                                {{ __('Policy Statements') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/conceptpaper')  }}">
                                {{ __('Concept Papers and Development Plans') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/actionplan')  }}">
                                {{ __('Implementation Plans') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/performance') }}">
                                {{ __('Performance Reports') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/datainfo') }}">
                                {{ __('Data and Information ') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/en/publications/download') }}">
                                {{ __('Downloads') }}
                            </a>
                        </div>

                </li>
                <li class="nav-item bg-success" style="">
                    <a class="nav-link" href="{{ url('/en/contactus') }}">{{ __('Contact Us') }}</a>
                </li>
                <li class="nav-item bg-danger" style="">
                    <a class="nav-link" href="{{ url('/en/rti') }}">{{ __('Information Act') }}</a>
                </li>
               <!-- @guest
                <li class="nav-item bg-info" style="">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item  bg-primary" style="">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            @endguest-->
        </ul>
    </div>
</div>
</nav>