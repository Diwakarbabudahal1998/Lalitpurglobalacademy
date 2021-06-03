<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
       
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
        <style>
        .bg-gradient-primary{
            background:#752B90!important;
        }
        .form-control:disabled, .form-control[readonly]{
            background:white!important;
            color:black !important;
        }
        .modal-body{
            padding:1rem!important;
        }
        .book-card{
    
            position:relative;

        }
        .book-card:hover .book-card-overlay{
            display:block!important;
            transition:0.4s all;

        }
        .book-card-overlay{
     
            position:absolute;
           height:100%;
                z-index:999999;
                width:100%;
            top:0;
            transition:0.4s all;
            left:0;
            display:none!important;
            background-color:rgba(0,0,0,0.5);
        }
        .form-control:disabled, .form-control[readonly]{
            background:#d3d3d3!important;
        }
.btn-primary{
    background:#752B90;
    border-color:#752B90;
}
.btn-primary:hover{
    background:#752B90;
    border-color:#752B90;
    }
        </style>
    </head>
    <body onload="loadFunction()" class="{{ $class ?? '' }}">
    <div id="preloader"></div>

        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth

        <div class="main-content">
        @auth()
            @include('layouts.navbars.navbar')
         @endauth

            @yield('content')
        </div>

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/js/bootnavbar.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        @stack('js')
     

        <script src="https://cdn.tiny.cloud/1/i1grmxt9xusb895scs4338ctev5gg2qkc3hkbgrpq2tpy43r/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>                <script type="text/javascript">
                tinymce.init({
                    selector: '#mytextarea'
                });
                function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $("#news-img-display").attr("src", e.target.result);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#image").change(function () {
                        readURL(this);
                    });
                </script>
        <!-- Argon JS -->
        <script>
        
            var preloader = document.getElementById("preloader");
            function loadFunction() {
                preloader.style.display = "none";
            }

        </script>
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>