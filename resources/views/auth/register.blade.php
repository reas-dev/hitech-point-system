<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer-custom.css') }}" media="screen,projection" />
    <!-- Custom Input CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom-input.css') }}">
    @yield('customStyle')
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
</head>

<body class="grey lighten-4">
    <nav>
        <div class="nav-wrapper">
          <a class="navbar-brand brand-logo center" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-navbar.png') }}" height="40" class="mt-1 ml-1" alt="" srcset="">
          </a>  
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
            
    <div class="container mt-2">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card">
                <div class="card-content">
                    <div class="row">
                      <div class="input-field col m12">
                        <i class="material-icons prefix">person</i>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                        <label for="name">Name</label>
                        @error('name')
                        <span class="omrs-input-helper red-text">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="row m12">
                      <div class="col m6">
                        <div class="input-field">
                          <i class="material-icons prefix">email</i>
                          <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                          <label for="email">Email</label>
                          @error('email')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col m6">
                        <div class="input-field">
                          <i class="material-icons prefix">message</i>
                          <input id="phone" type="text" name="phone" value="{{ old('phone') }}" required>
                          <label for="phone">Nomor WA</label>
                          @error('phone')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                  </div>
                    <div class="row">
                      <div class="input-field col m12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="username" type="text" name="username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                        @error('username')
                        <span class="omrs-input-helper red-text">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="row m12">
                      <div class="col m6">
                        <div class="input-field">
                          <i class="material-icons prefix">lock</i>
                          <input id="password" type="password" name="password" required>
                          <label for="password">Password</label>
                          @error('password')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="col m6">
                        <div class="input-field">
                          <i class="material-icons prefix">lock</i>
                          <input id="password-confirm" type="password" name="password_confirmation" required>
                          <label for="password-confirm">Confirm Password</label>
                          @error('password_confirmation')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                  </div>
                    <div class="row">
                        <div class="input-field col m12">
                          <i class="material-icons prefix">vpn_key</i>
                          <input id="key-access" type="password" name="key-access" value="{{ old('key-access') }}" required>
                          <label for="key-access">Key Access</label>
                          @error('key-access')
                          <span class="omrs-input-helper red-text">{{ $message }}</span>
                          @enderror
                        </div>
                    </div>
                      <div class="row center">
                        <button type="submit" class="btn btn-large btn-rounded">
                            {{ __('Register') }}
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