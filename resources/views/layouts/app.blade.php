<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'einvoice') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'einvoice') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    <!--    <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"> 
                  <div class="panel panel-default" style=" height: 570px">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Create New User</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">View All Members</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Add Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">View All Contect</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Generate invoice</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Manage lables</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#" style="color: black">Manage payments</a>
                        </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-10"> @yield('content') </div>   
            </div>
        </div> --> 
        @yield('content')  
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
