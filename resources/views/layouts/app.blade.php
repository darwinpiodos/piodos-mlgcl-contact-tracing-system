<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
     
     .mlg-logo{
        width:50px;
    }
    .logo-container{
        display:flex;
        align-items:center;
        margin-left:;
    }
    .logo-text{
        display:flex;
        flex-direction:column;
        margin-left:15px;

    }
    
     .logo-text .navbar-brand{
     
        color:white;
    }
    .logo-text .navbar-brand:hover{
     
     color:whitesmoke;
 }
    .navbar-brand{
        padding:0px;
        font-size:18px;
    }
    
    .mlgcl-fs{
        font-size:30px;
        
    }
  .links-right{
      color:white;
      text-decoration:none;
      font-size:18px;
    
  }
  .links-right:hover{
      color:whitesmoke;
  }
  .navbar-nav{
      position:absolute;
      right:30px;
  }
  .back-color{
      background-color:#0299eb;
      box-shadow:1px 1px 5px gray
  }
  .navbar{
      box-shadow:1px 1px 5px gray;
  }
   
   body{
       background-color:whitesmoke;
   }
   .name-user{
       color:white;
   }
   .nav-item a{
       color:white;
   }
   /* .navbar-nav{
    position: absolute  !important;
    right: 30px;
    background-color: cornflowerblue  !important;
    margin-top: 8px;
    right: 0px;
    width: 34%;
    height: 126%;
   } */
    </style>    
</head>
<body>
    <div id="app">


    
        <nav class="navbar navbar-expand-md navbar-light shadow-sm back-color" >

            <div class="container-fluid">


                <!-- <a class="navbar-brand text-light" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> -->

                <div class="logo-container">
                <a href="#">
                    <img src="image/mlg-logo.png" class="mlg-logo">
                </a>
                <div class="logo-text">

                    <a class="navbar-brand mlgcl-fs" href="#">MLGCL</a>
                    <a class="navbar-brand" href="#">COVID-19 CONTACT TRACING SYSTEM</a>

                </div>

            </div>


                
                <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-light"></span>
                </button>

                <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-light ">
                        <!-- Authentication Links -->

                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light links-right " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light links-right" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown dar-dar text-lighten">

                            <a id="navbarDropdown" class=" text-light nav-link dropdown-toggle name-user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-right name-user" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
