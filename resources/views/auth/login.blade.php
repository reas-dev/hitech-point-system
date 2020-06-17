<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer-custom.css') }}" media="screen,projection" />
    @yield('customStyle')
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body class="grey lighten-4">
    <nav>
        <div class="nav-wrapper">
          <a class="navbar-brand brand-logo center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-navbar.png') }}" height="40" class="mt-1 ml-1" alt="" srcset="">
          </a>
          <a href="{{ url('/') }}" class="brand-logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav indigo darken-4" id="mobile-demo">
          <div class="background">
              <li><a href="{{ route('login') }}" class="white-text">Login</a></li>
              <li><a href="{{ route('register') }}" class="white-text">Register</a></li>
          </div>
      </ul>
            
    <div class="container mt-5 center">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card mt-5">
                <div class="card-content">
                    {{-- <h3 class=" secondary-text">HI TECH 2020</h3>
                    <br> --}}
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="username" type="text" name="username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                        @error('username')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" name="password" required>
                          <label for="password">Password</label>
                          @error('password')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>
                      <div class="row">
                        <button type="submit" class="btn btn-large btn-rounded">
                            {{ __('Login') }}
                        </button>
                      </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        M.AutoInit()
    </script>
</body>

</html>