<nav id="guestNavbar" class="navbar navbar-expand-lg d-lg-block d-sm-none fixed-top py-1">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/logo/NEO-FULL/NEO2024LogoOnly.png" alt="NEO" width="75">
        </a>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                @if (Request::is('/'))
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about" >
                            OUR TALE
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#competition">
                            COMPETITION
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#timeline">
                            TIMELINE
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#testimony">
                            TESTIMONY
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#faq">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#footer">
                            CONTACT
                        </a>
                    </li>
                @endif
                {{-- Aman --}}

                {{-- Urusan pertombolan --}}
                {{-- @if (Auth::guard('participant')->check())
                    <li class="mx-2 d-block d-xl-none">
                        <a href="{{ route('participant.dashboard') }}" class="text-black nav-link">
                            BACK TO DASHBOARD BANG
                        </a>
                    </li>
                @elseif (auth()->user())
                    <li class="mx-2 d-block d-xl-none">
                        <a href="{{ auth()->user() ? route('dashboard') : route('participant.dashboard') }}"
                            class="text-white nav-link d-block d-xl-none">
                            BACK TO DASHBOARD DEK
                        </a>
                    </li>
                @else
                    <li class="d-md-block d-lg-none nav-item mx-2">
                        <a class="nav-link text-white" href="{{ route('register') }}">
                            REGISTER
                        </a>
                    </li>
                    <li class="d-md-block d-lg-none nav-item mx-2">
                        <a class="nav-link text-white" href="{{ route('login') }}"
                            style="font-family: Buffalo-Inline">LOG IN</a>
                    </li>
                @endif --}}
                {{-- ATAS INI ANEH --}}
            </ul>
            <div>
                @if(auth()->user())
                    <a href="{{ auth()->user() ? route('dashboard') : route('participant.dashboard') }}"
                        class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline primary-btn-neo2024">
                        BACK TO DASHBOARD
                    </a>

                @elseif(Auth::guard('participant')->check())
                    <a href="{{ route('participant.dashboard') }}"
                        class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline primary-btn-neo2024">
                        BACK TO DASHBOARD
                    </a>

                @else
                    <a href="{{ route('register') }}" class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline scaling primary-btn-neo2024">
                        REGISTER
                    </a>
                    {{-- Miring registernya --}}
                    <a href="{{ route('login') }}" class="btn py-2 px-3 rounded-3 d-none d-xl-inline scaling secondary-btn-neo2024">
                        LOG IN
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg d-lg-none d-sm-block d-block fixed-top py-1">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/logo/NEO-FULL/NEO2024LogoOnly.png" alt="NEO" width="75">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
            <span class="fa-lg">
                <i class="bi bi-list"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                @if (Request::is('/') )
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">
                            ABOUT
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#competition">
                            COMPETITION
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#timeline">
                            TIMELINE
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#testimony">
                            TESTIMONY
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#faq">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#footer">
                            CONTACT
                        </a>
                    </li>
                @endif

                {{-- Yang ini tulisan --}}
                @if (Auth::guard('participant')->check())
                    <li class="mx-2 d-block d-xl-none">
                        <a href="{{ route('participant.dashboard') }}"
                            class="nav-link">
                                BACK TO DASHBOARD
                        </a>
                    </li>
                @elseif (auth()->user())
                    <li class="mx-2 d-block d-xl-none">
                        <a href="{{ auth()->user() ? route('dashboard') : route('participant.dashboard') }}"
                            class="nav-link d-block d-xl-none">
                                BACK TO DASHBOARD
                        </a>
                    </li>
                @else
                    <li class="d-md-block d-lg-none nav-item mx-2">
                        <a class="nav-link" href="{{ route('register') }}" style="font-weight:bold;">
                            REGISTER
                        </a>
                    </li>
                    <li class="d-md-block d-lg-none nav-item mx-2">
                        <a class="nav-link" href="{{ route('login') }}" style="font-weight: bold;">
                            LOG IN
                        </a>
                    </li>
                @endif
            </ul>
            <div>
                {{-- Yang ini Button, masukin ke ul --}}
                {{-- @if (auth()->user() || Auth::guard('participant')->check()) --}}
                @if (auth()->user())
                    <a href="{{ auth()->user() ? route('dashboard') : route('participant.dashboard') }}"
                        class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline"
                        style="font-family: Buffalo-Inline !important;background: #FF6701;color:white;border:1px solid #FF6701;box-shadow: 0px 0px 84px 20px rgba(255, 103, 1, 0.40);border-radius: 0px !important">
                        Back to dashboard
                    </a>
                @elseif(Auth::guard('participant')->check())
                    <a href="{{ route('participant.dashboard') }}"
                        class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline"
                        style="font-family: Buffalo-Inline !important;background: #FF6701;color:white;border:1px solid #FF6701;box-shadow: 0px 0px 84px 20px rgba(255, 103, 1, 0.40);border-radius: 0px !important">
                        Back to dashboard
                    </a>
                @else
                    {{-- <a href="{{ route('register') }}" class="btn py-2 px-3 me-2 rounded-3 d-none d-xl-inline scaling"
                        style="font-family: Buffalo-Inline !important;background: #B60200;color:white;border:1px solid #B60200;border-radius: 0px !important">REGISTER</a>
                    <a href="{{ route('login') }}" class="btn py-2 px-3 rounded-3 d-none d-xl-inline scaling"
                        style="font-family: Buffalo-Inline !important;background: #FF6701;color:white;border:1px solid #FF6701;border-radius: 0px !important">LOG IN</a> --}}
                @endif
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar{
        background-color: #F0DF99;
    }
    .scaling {
        scale: 1;
        transition: 500ms ease-in-out;
    }

    .scaling:hover {
        scale: 1.1;
        transition: 500ms ease-in-out;
    }

    .bg-drop {
        background: rgba(0, 0, 0, 0.30);
        backdrop-filter: blur(25px);
    }

    .bg-black {
        background: rgb(0, 0, 0) !important;
        box-shadow: 0px 3px 5px 0px rgba(250, 107, 3, 0.45) !important;
    }

    .nav-item {
        position: relative;
        display: inline-block;
    }

    .nav-link {
        color: #522C22;
        font-family: "GoudyOld";
        /* font-weight: 600; */
        position: relative;
        display: inline-block;
        text-decoration: none;
    }
    .nav-link::after{
        content:'';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: #522C22;
        transition: width 0.3s ease-in-out;
    }

    .nav-link:hover::after{
        width: 100%;
    }

    .primary-btn-neo2024{
        font-family: "GoudyOld";
        font-weight: 600;
        background: white;
        color:#522C22;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .primary-btn-neo2024:hover{
        font-family: "GoudyOld";
        background: #522C22;
        color:white;
        border-radius: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }

    .secondary-btn-neo2024{
        font-family:"GoudyOld";
        font-weight: 600;
        color: #522C22;
        border:1px solid #522C22;
        border-radius: 16px;
    }

    .secondary-btn-neo2024:hover{
        font-family:"GoudyOld";
        background: #522C22;
        color: white;
        border-radius: 16px;
    }

    .navbar-toggler{
        border-color: #522C22;
        color: #522C22;
    }

    .fa-lg{
        color: #522C22"
    }
</style>
