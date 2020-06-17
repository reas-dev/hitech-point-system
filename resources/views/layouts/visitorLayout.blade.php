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
    <title>@yield('title')</title>
</head>

<body class="grey lighten-4">

    <nav>
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo center">@yield('title')</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/visitor') }}">Developer List</a></li>
                <li><a href="{{ url('/visitor/profile') }}">Profile</a></li>
                <li><a href="{{ url('/visitor/guidelines') }}">Guidelines</a></li>
                <li><a  href="{{ url('logout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav indigo darken-4" id="mobile-demo">
        <div class="background">
            <li><a class="waves-effect white-text" href="{{ url('/visitor') }}"><i
                class="material-icons white-text">list</i>Developer List</a>
            </li>
            <div class="divider"></div>
            <li><a class="waves-effect white-text" href="{{ url('/visitor/profile') }}"><i
                class="material-icons white-text">face</i>Profile</a>
            </li>
            <li><a class="waves-effect white-text" href="{{ url('/visitor/guidelines') }}"><i
                class="material-icons white-text">description</i>Guidelines</a>
            </li>
            <div class="divider"></div>
            <li><a class="waves-effect white-text" href="{{ url('logout') }}"><i
            class="material-icons white-text">power_settings_new</i>Logout</a>
            </li>
        </div>
    </ul>



    {{-- <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="{{ asset('img/bg.jpg') }}">
                </div>
                <a href="#user"><img class="circle"
                        src="http://mahasiswa.dinus.ac.id/images/foto/A/A11/{{ $detail[1] }}/{{ $detail[0] }}.jpg"></a>
                <a href="#name"><span class="white-text name">{{ $detail[2]->name }}</span></a>
                <a href="#email"><span class="white-text email">{{ $detail[2]->email }}</span></a>
            </div>
        </li>
        <li class="{{ (request()->is('observer')) ? 'active' : '' }}"><a class="waves-effect"
                href="{{ url('observer') }}"><i class="material-icons">home</i>Home</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <div class="row">
            <ul class="tabs">
                <li class="tab col s3"><a class="" href="#participant-menu"><i
                            class="material-icons custom-place">person</i></a>
                </li>
                <li class="tab col s3"><a class="" href="#correction-menu"><i
                            class="material-icons custom-place">assignment</i></a>
                </li>
            </ul>
            <div id="participant-menu">
                <li><a class="subheader">Peserta</a></li>
                <li class="{{ (request()->is('admin/participant/add')) ? 'active' : '' }}"><a class="waves-effect"
                        href="{{ url('observer/participant/add') }}"><i
                            class="material-icons">add_circle_outline</i>Input
                        Peserta</a></li>
                <li class="{{ (request()->is('admin/participant/table')) ? 'active' : '' }}"><a class="waves-effect"
                        href="{{ url('observer/participant/table') }}"><i class="material-icons">clear_all</i>Tabel
                        Peserta</a>
                </li>
            </div>

            <div id="correction-menu">
                <li><a class="subheader">Koreksi</a></li>
                <li class=""><a class="waves-effect" href="{{ url('observer/competition') }}"><i
                            class="material-icons">remove_red_eye</i>Koreksi
                        Jawaban</a></li>
            </div>
        </div>
        <div class="divider"></div>
        <li class=""><a class="waves-effect" href="{{ url('logout') }}"><i
                    class="material-icons">power_settings_new</i>Logout</a>
        </li>
    </ul>

    <ul id="competition_controll" class="dropdown-content">
        <li><a href="#!">Statistik</a></li>
        <li><a href="#!">Sesi</a></li>
        <li><a href="#!">Eliminasi</a></li>
        <li><a href="#!">Kick</a></li>
    </ul> --}}

    <div class="container mt-2">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            M.AutoInit()
        </script>

        @if (Session::has('status') && Session::get('status') == 'notYet')
        <script>
        Swal.fire({
        icon: 'error',
        title: 'Ups!',
        text: 'Developer belum bisa dinilai',
        })
        </script>
        @elseif (Session::has('status') && Session::get('status') == 'invalid')
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Ups!',
                text: 'Developer tidak ditemukan',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        @elseif (Session::has('status') && Session::get('status') == 'haveDone')
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Ups!',
            text: 'Developer sudah pernah dinilai',
            showConfirmButton: false,
            timer: 1500
            })
        </script>
        @elseif (Session::has('status') && Session::get('status') == 'success')
        <script>
            Swal.fire(
            'Yeay!',
            'Developer berhasil dinilai',
            'success'
            )
        </script>
        @endif
        <script>
            $(document).ready(function () {
                $('#score').on('input propertychange paste', function () {
                    var input = $('#score').val()
                    $('#info').text("nilai : " + input)
                })
        
            });
        </script>
    @yield('js')
</body>

</html>
