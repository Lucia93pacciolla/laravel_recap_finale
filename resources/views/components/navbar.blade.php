<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Libreria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('library.index')}}">Lista librerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('library.create')}}">Inserisci libreria</a>
          </li>
            @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ciao {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#form-logout').submit();">Esci</a></li>
                  <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
                </ul>
              </li> 
            @else

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao ospite
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              </ul>
            </li> 
  
            @endauth
        </ul>
      </div>
    </div>
  </nav>