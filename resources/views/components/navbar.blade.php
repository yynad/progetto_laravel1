<nav class="navbar navbar-expand-lg nav-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.pngarts.com/files/2/Book-Free-PNG-Image.png" alt="" class="" style="width: 55px; height: 55px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('homepage')}}">HOMEPAGE</a>
        </li>
@auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
           aria-expanded="false">
            <i class="bi bi-plus-circle me-1"></i>CREA
        </a>
        <ul class="dropdown-menu dropdown-menu-start animate slideIn">
            <li>
                <a class="dropdown-item" href="{{ route('book.create') }}">
                    <i class="bi bi-book me-2"></i>AGGIUNGI UN LIBRO
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('platform.create') }}">
                    <i class="bi bi-hdd-network me-2"></i>AGGIUNGI UNA PIATTAFORMA
                </a>
            </li>
        </ul>
    </li>
@endauth
        <li class="nav-item">
          <a class="nav-link" href="{{route('book.index')}}">LIBRERIA</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('platform.index')}}">NETWORKS</a>
        </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-person me-1"></i>ACCEDI
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate slideIn">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>ACCEDI
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">
                                    <i class="bi bi-person-plus me-2"></i>REGISTRATI
                                </a>
                            </li>
                        </ul>
                    </li>
                @endguest
@auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person-circle me-1"></i>PROFILO
        </a>
        <ul class="dropdown-menu dropdown-menu-end animate slideIn">
    <li>
        <h6 class="dropdown-header text-white">
            LOGGATO COME: {{ Auth::user()->name }}
        </h6>
    </li>
    <li>
        <a class="dropdown-item" href="{{ route('dashboard') }}">
            <i class="bi bi-house-door me-2"></i>IL MIO PROFILO
        </a>
    </li>
    <li>
        <a class="dropdown-item" href="#"
           onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
            <i class="bi bi-box-arrow-right me-2"></i>LOGOUT
        </a>
    </li>
</ul>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endauth

        
      </ul>
    </div>
  </div>
</nav>