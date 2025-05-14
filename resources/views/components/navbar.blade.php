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
@auth
      <li class="nav-item">
          <a class="nav-link" href="#">Ciao, {{Auth::user()->name}}!</a>
@endauth
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('homepage')}}">HOMEPAGE</a>
        </li>
@auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('book.create')}}">NUOVO LIBRO</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('platform.create')}}">NUOVA PIATTAFORMA</a>
        </li>
@endauth
        <li class="nav-item">
          <a class="nav-link" href="{{route('book.index')}}">LIBRERIA</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('platform.index')}}">NETWORKS</a>
        </li>
@guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">REGISTRATI</a>
@endguest
@auth
        <a class="nav-link" href="{{route('dashboard')}}">PROFILO</a>
        <li class="nav-item">
          <a class="nav-link log1" href="#" onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">LOGOUT</a></li>
          <form action="{{route('logout')}}" method="POST" class="d-none" id="logout-form">
            @csrf</form>
@endauth

        
      </ul>
    </div>
  </div>
</nav>