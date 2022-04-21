<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
        <a class="navbar-brand  text-white " href="{{ route('home') }}" rel="tooltip" data-placement="bottom">
            MIA
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Pages
                        <img src="{{ asset('img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
                        <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
                    </a>
                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
                        <div class="d-none d-lg-block">
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                Landing Pages
                            </h6>
                            @if($pages)
                            @foreach($pages as $page)
                                <a href="{{ route('pages.show', ['slug' => $page->slug]) }}" class="dropdown-item border-radius-md">
                                    <span>{{ $page->menu_name }}</span>
                                </a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </li>
                <li class="nav-item ms-lg-auto">
                    <a class="nav-link nav-link-icon me-2" href="https://github.com/narekx" target="_blank">
                        <i class="fa fa-github me-1"></i>
                        <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Star us on Github">Github</p>
                    </a>
                </li>
                @if(auth()->user())
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-6">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages8" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user me-1"></i>
                            {{ auth()->user()->name }}
                            <img src="{{ asset('img/down-arrow-white.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-block d-none">
                            <img src="{{ asset('img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-2 d-lg-none d-block">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages8">
                            <div class="d-none d-lg-block">
                                <a href="{{ route('admin.dashboard') }}" class="dropdown-item border-radius-md">
                                    <span>Dashboard</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                    @csrf
                                    <input type="submit" class="dropdown-item border-radius-md" value="Logout">
                                </form>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="{{ route('login') }}"">
                            <i class="fa fa-github me-1"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Login</p>
                        </a>
                    </li>
                    <li class="nav-item ms-lg-auto">
                        <a class="nav-link nav-link-icon me-2" href="{{ route('register') }}"">
                            <i class="fa fa-github me-1"></i>
                            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Register</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
