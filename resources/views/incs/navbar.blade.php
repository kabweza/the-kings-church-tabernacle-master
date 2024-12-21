<header role="banner">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <br><br>
      <a href="/">
      {{-- <a class="navbar-brand" href="/">Kings Global Tabernacle</a><br> --}}
      <img style="width: 250px;" src="{{ "$pF/advent/img/logo.png" }}" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if(Route::currentRouteName() == 'activities') active @endif" href="{{ route('activities') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Church</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="{{ route('activities') }}">Activities</a>
              <a class="dropdown-item" href="{{ route('mission') }}">Missions & Vision</a>
              <a class="dropdown-item" href="{{ route('contact') }}">Request Prayer</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'event') active @endif" href="{{ route('event') }}">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'book') active @endif" href="{{ route('book') }}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'ipn') active @endif" href="{{ route('ipn') }}">INTERCESSORY PRAYER NETWORK
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'contact') active @endif" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
</header>