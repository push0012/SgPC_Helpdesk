<nav class="navbar navbar-expand-md navbar-light navbar-laravel align-self-center" 
style="z-index:500; background-color: white; max-height: 44px !important; width: 100% !important; padding:0 !important;">
    <div class="container" style="padding:0 !important;">

        <li class="nav-item bg-success" style="list-style: none; margin-left: unset !important; ">
            <a class="navbar-brand " href="{{ url('/ta') }}" id="nav-brand" style=" transition: 0.2s !important;">
                {{ _('முகப்பு') }}
            </a>
        </li>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item bg-danger" style="">
                    <a class="nav-link" href="{{ url('/ta/about')  }}" >{{ __('எம்மைப் பற்றி') }}</a>
                </li>
                <li class="nav-item bg-primary dropdown" style="">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('வெளியீடுகள்') }}
                    </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown" style="font-size:0.8em !important;">

                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/policy')  }}">
                                {{ __('கொள்கை அறிக்கைகள்') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/conceptpaper')  }}">
                                {{ __('கருத்து ஆவணங்கள்') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/actionplan') }}">
                                {{ __('செயல்படுத்தும் திட்டங்கள்') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/performance') }}">
                                {{ __('செயல்திறன் அறிக்கைகள்') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/datainfo') }}">
                                {{ __('தரவு மற்றும் தகவல்') }}
                            </a>
                            <a class="dropdown-item bg-primary" href="{{ url('/ta/publications/download') }}">
                                {{ __('தரவிறக்கங்கள்') }}
                            </a>
                        </div>

                </li>
                <li class="nav-item bg-success" style="">
                    <a class="nav-link" href="{{ url('/ta/contactus') }}">{{ __('தொடர்புகளுக்கு') }}</a>
                </li>
                <li class="nav-item bg-danger" style="">
                    <a class="nav-link" href="{{ url('/ta/rti') }}" style="font-size: 0.8em;">{{ __('தகவல் அறியும் சட்டம்') }}</a>
                </li>
        </ul>
    </div>
</div>
</nav>