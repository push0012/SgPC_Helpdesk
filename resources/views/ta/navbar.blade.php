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
                <li class="nav-item bg-primary" style="">
                    <a class="nav-link" href="{{ url('/ta/download') }}">{{ __('தரவிறக்கங்கள்') }}</a>
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