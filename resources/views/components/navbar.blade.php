<nav class="navbar navbar-expand-lg" style="background-image: url('/backgrounds/parchment-texture.jpg'); background-size: cover; border-bottom: 5px solid #4d2c09; box-shadow: 0 4px 8px rgba(0,0,0,0.8); font-family: 'MedievalSharp', cursive;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://www.pngarts.com/files/2/Book-Free-PNG-Image.png" alt="logo" style="width: 55px; height: 55px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 2px solid #321f0e;">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{route('homepage')}}" style="font-size: 1.2rem; color: #D9C29D">🏰 CASTELLO</a>
        </li>

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 fw-bold" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="font-size: 1.2rem; color: #D9C29D">
            📜 CREA
          </a>
          <ul class="dropdown-menu text-center" style="background-color: #f3e4bc; border: 2px solid #4d2c09;">
            <li>
              <a class="dropdown-item fw-bold text-dark" href="{{ route('book.create') }}">📖 AGGIUNGI UN LIBRO</a>
            </li>
            <hr>
            <li>
              <a class="dropdown-item fw-bold text-dark" href="{{ route('platform.create') }}">🛡️ AGGIUNGI UNA PIATTAFORMA</a>
            </li>
          </ul>
        </li>
        @endauth

        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{route('book.index')}}" style="font-size: 1.2rem; color: #D9C29D">📚 LIBRERIA</a>
        </li>

        <li class="nav-item">
          <a class="nav-link fw-bold" href="{{route('platform.index')}}" style="font-size: 1.2rem; color: #D9C29D">🕸️ NETWORKS</a>
        </li>

        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="font-size: 1.2rem; color: #D9C29D">
            👤 ACCEDI
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="background-color: #f3e4bc; border: 2px solid #4d2c09;">
            <li>
              <a class="dropdown-item text-dark" href="{{ route('login') }}">🔐 ACCEDI</a>
            </li>
            <li>
              <a class="dropdown-item text-dark" href="{{ route('register') }}">📝 REGISTRATI</a>
            </li>
          </li>
        </ul>
        @endguest

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3 fw-bold" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="font-size: 1.2rem; color: #D9C29D">
            🧝‍♂️ PROFILO
          </a>
          <ul class="dropdown-menu dropdown-menu-end" style="background-color: #f3e4bc; border: 2px solid #4d2c09;">
            <li>
              <h6 class="dropdown-header text-dark fw-bold">Loggato come: {{ Auth::user()->name }}</h6>
            </li>
            <li>
              <a class="dropdown-item fw-bold text-dark" href="{{ route('dashboard') }}">🏠 PROFILO</a>
            </li>
            <li>
              <a class="dropdown-item fw-bold text-dark" href="#"
                onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
                🚪 LOGOUT
              </a>
            </li>
            <hr>
            <li>
              <a class="dropdown-item text-danger fw-bold" href="" data-bs-toggle="modal"
                data-bs-target="#deleteAccountModal">⚔️ ELIMINA ACCOUNT</a>
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