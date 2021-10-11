<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container">
            <a class="text-light text-decoration-none" href="#">
              <h1 class="fs-4 fw-bold">DC COMICS</h1>
            </a>
        </div>
        <ul class="navbar-nav">    
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('home') ? 'active' : " "}}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('comics.index') ? 'active' : " "}} " href="{{route('comics.index')}}">Comics</a>
            </li>
      </div>
    </div>
  </nav>