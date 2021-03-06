<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        a {
            color:black;
        }
      </style>
      
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.3/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
        </nav>

        {{--  <main class="py-4">
            @yield('content')
        </main>  --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">
                            {{$error}}
                        </li>    
                    @endforeach
                </ul>
            </div>            
            <br>
            <br>
        @endif
        
        <main class="container py-4">
            <div class="row">
                <div class="col-4">   

                    <a href="{{route('discussion.create')}}" class="form-control btn btn-primary">Create a new Discussion</a>  
                    <br>
                    <br>
                    <div class="card card-default ">
        
                        <div class="card card-body" >
                            <ul class="list-group"><strong>
                                <li class="list-group-item">
                                    <a href="/Forum" style="text-decoration: none">Home</a>

                                </li>
                                
                                <li class="list-group-item" >
                                    <a href="/Forum?filter=me" style="text-decoration: none color:black">My Discussion</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="/Forum?filter=solved" style="text-decoration: none">Answered Discussion</a>
                                </li>

                                <li class="list-group-item">
                                    <a href="/Forum?filter=unsolved" style="text-decoration: none">UnAnswered Discussion</a>
                                </li>
                            </strong>
                            </ul>
                        </div>

                        @if(Auth::check())
                            @if (Auth::user()->admin)
                            <div class="card card-body">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="{{route('channels.index')}}" style="text-decoration: none">All Channel</a>

                                    </li>
                                </ul>
                            </div>
                            @endif
                        @endif
                    </div>                
                    <div class="card card-default mt-4">
                        <div class="card card-header">
                            Channels
                        </div>
                        <div class="card card-body">
                            <ul class="list-group">
                                {{--  {{$channels}}  --}}
                                @foreach ($c as $channel)
                                    <li class="list-group-item">
                                        <a href="{{route('channel',$channel->slug)}}" style="text-decoration: none">{{$channel->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    @yield('js')


    <!-- Scripts -->
    <script src="/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
    @if(Session::has('success'))

     toastr.success('{{Session::get('success')}}')

    @endif

    @if (Session::has('info'))
        toastr.warning('{{Session::get('info')}}')
    @endif
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.3/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>


</body>
</html>
