<div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{-- {{ $sitename }} --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav">
          <li><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle mr-1"></i>{{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}">
                            <i class="fas fa-user mr-2"></i>Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
