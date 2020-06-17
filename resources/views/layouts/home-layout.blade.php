<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Hi Technology</title>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('img/logo-navbar.png?v1')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('img/logo-navbar.png?v1')}}" type="image/x-icon" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom Input CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom-input.css') }}">

    <!-- Animate CSS -->
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <!-- Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,400,800&display=swap" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @yield('content')

    <!-- ========= JS Section Start ========= -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @if (Session::has('status') && Session::get('status') == 'success')
    <script>
        Swal.fire(
            'Yeay !',
            'Kamu telah berpartisipasi dalam Hi Technology 2020. Silahkan hubungi via Whatsaap di nomor <br> +62 831 1039 8418',
            'success'
        )
    </script>
    @elseif(Session::has('status') && Session::get('status') == 'error')
    <script>
        Swal.fire(
            'Ups Terjadi Sesuatu !',
            'Tenang, kamu bisa daftar lagi kok :) . maaf atas gangguan yang telah terjadi',
            'error'
        )
    </script>
    @elseif(Session::has('status') && Session::get('status') == 'closed')
    <script>
        Swal.fire(
            'Maaf,',
            'Kuota sudah terpenuhi, See you next year !',
            'error'
        )
    </script>
    @endif
    @if ($errors->any())
    <script>
        Swal.fire({
            title: 'Ups !',
            text: "Anda melewatkan sesuatu di from registrasi",
            icon: 'warning',
            confirmButtonColor: '#28A745',
            confirmButtonText: 'Perbaiki data',
            backdrop:'rgba(0,0,0,0.8)'
        }).then((result) => {
            if (result.value) {
                $("html, body").animate({scrollTop: $('#register').offset().top }, 1000);
            }
        })
    </script>
    @endif
    @yield('js')
    <!-- ========= JS Section End ========= -->
</body>

</html>
