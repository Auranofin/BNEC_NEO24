<nav class="navbar navbar-expand-md bg-white shadow-sm fixed-top py-1">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="/storage/logo/NEO-FULL/logo_neo_2024_colored.svg" alt="NEO" width="55">
            {{-- <img src="/storage/logo/NEO-WORD/Colored.png" alt="NEO" width="90"> --}}
        </a>

        <div class="dropdown">
            <a class="text-decoration-none btn-dropdown btn border-0" role="button" data-bs-toggle="dropdown">
                <span class="fa-stack fa-sm ">
                    <i class="bi bi-circle-fill fa-stack-2x "></i>
                    <i class="bi bi-person-fill fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fw-medium">
                    {{ auth()->user()->name }}
                </span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end p-1 border-0 shadow-sm rounded-3 px-4 py-3" style="font-size: 14px">
                <div class="d-flex align-items-center">
                    <span class="pe-2"><i class="bi bi-person-circle fs-3" style="color: #38AAC4 !important"></i></span>
                    <span class="fw-semibold text-start" style="white-space: nowrap;">
                        @php
                            $name = auth()->user()->name;
                            if (strlen($name) > 14) {
                                $name = substr($name, 0, 14) . '...';
                            }
                        @endphp
                        {{ $name }}
                    </span>

                </div>
                <hr class="my-1">
                <li>
                     <a class="dropdown-item px-2 py-1 rounded-3" href="{{ route('home') }}"><span class="col-3"><i class="pe-2 fa-solid fa-house" style="color: #38AAC4 !important"></i></span> {{ __('Home') }}</a>
                </li>
                <li>
                     <a class="dropdown-item px-2 py-1 rounded-3" href="{{ route('dashboard') }}"><span class="col-3"><i class="pe-2 bi bi-grid-1x2-fill" style="color: #38AAC4 !important"></i></span> {{ __('Dashboard') }}</a>
                </li>
                <hr class="my-1">
                <li>
                    <a href="{{ route('logout') }}" type="button" class="dropdown-item px-2 py-1 rounded-3"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="col-3"><i class="ps-2 fa-solid fa-right-from-bracket" style="transform: rotate(180deg);color: #38AAC4 !important"></i></span> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>

    </div>
</nav>
<style>
    .btn-dropdown.btn{
        --bs-btn-color: #38AAC4;
    }
    .btn-dropdown.btn:hover{
        --bs-btn-hover-color: #38AAC4;
    }
    .btn-dropdown.btn.show{
        color: #38AAC4!important;
    }

    .dropdown-menu{
        --bs-dropdown-link-active-bg: #38AAC4 !important;
    }
</style>