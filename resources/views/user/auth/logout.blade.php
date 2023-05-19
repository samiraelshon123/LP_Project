<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->


                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">{{ __('Login') }}</a>
                                </li>



                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('logout') }}">{{ __('Logout') }}</a>
                                </li>



                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Logout') }}</div>

                        <div class="card-body">
                            <center>
                            <img src="{{asset('images/logout.png')}}" width="350px" height="250px"alt="">
                        </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
