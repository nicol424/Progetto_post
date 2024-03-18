<nav class="navbar navbar-expand-lg navCus">
    <div class="container-fluid">
        <div class="d-flex justify-content-start">
            @auth
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link mainTxt fs-4" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropColor">
                    <li><a class="dropdown-item mainTxt colorCus" href="{{ route('login') }}">Profilo</a>
                    </li>
                    @if (Auth::user()->is_admin)
                    <li><a class="dropdown-item mainTxt colorCus" href="{{ route('admin.dashboard') }}">Dashboard
                        Admin</a>
                    </li>
                    
                    @endif
                    @if (Auth::user()->is_revisor)
                    <li><a class="dropdown-item mainTxt colorCus" href="{{ route('revisor.dashboard') }}">Dashboard
                        Revisore</a>
                    </li>
                    
                    @endif
                    <li><a class="dropdown-item mainTxt colorCus" href="#"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                    </li>
                    <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none">@csrf</form>
                </ul>
            </li>

            @if (Auth::user()->is_admin)
            <li><a class="nav-link mainTxt fs-4" href="{{ route('article.create') }}">Inserisci un articolo</a></li>
            @endif

            @if (Auth::user()->is_writer)
            <li><a class="nav-link mainTxt fs-4" href="{{ route('article.create') }}">Inserisci un articolo</a></li>
            @endif

            <li><a class="nav-link mainTxt fs-4" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
        </ul>
        @endauth
        
        @guest
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/user.png" width="25px" alt="">
                </a>
                
                <ul class="dropdown-menu ">
                    <li><a class="dropdown-item mainTxt" href="{{ route('login') }}">Login</a>
                    </li>
                    <li><a class="dropdown-item mainTxt" href="{{ route('register') }}">Registrati</a></li>
                </ul>
            </li>
        </ul>
        @endguest
        
    </div>
    <div class="d-flex justify-content-center">
        <a class="navbar-brand" href="#"><img src="./img/logoStorySail.png" width="75px" alt=""></a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button> --}}
</div>

<div class="d-flex justify-content-end">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <i class="fa-solid fa-house fa-xl" style="color: #040610;" aria-current="page"></i>
                <a class="nav-link mainTxt fs-4" aria-current="page" href="{{ route('home') }}">homepage</a>
            </li>
        </ul>
    </div>
</div>
</div>
</nav>
