<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap HTML template and UI kit by Medium Rare">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Begin loading animation -->
    <link href="assets/css/loaders/loader-pulse.css" rel="stylesheet" type="text/css" media="all" />
    <!-- End loading animation -->
    <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
    <div class="loader">
        <div class="loading-animation"></div>
    </div>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->

                    @includeWhen(Auth::user() && Auth::user()->is_admin, 'layouts._admin_menu')

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                @include('flash::message')
            </div>
        </div>

        <div data-overlay class="min-vh-100 bg-light d-flex flex-column justify-content-md-center">
            <section class="py-3">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="card card-body shadow">
                      <h1 class="h5 text-center">Sign In</h1>
        
                      <form role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
        
                        {{-- <div class="form-group">
                          <input type="email" class="form-control" name="sign-up-email" placeholder="Email Address">
                        </div> --}}
        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
        
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
        
                        {{-- <div class="form-group">
                          <input type="password" class="form-control" name="sign-up-password" placeholder="Password">
                          <div class="text-right text-small mt-2">
                            <a href="account-forgot-password.html">Forgot Password?</a>
                          </div>
                        </div> --}}
        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
        
                            <div class="text-right text-small mt-2">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        </div>
        
                        <div class="form-group">
                          <div class="custom-control custom-checkbox text-small">
                            <input type="checkbox" class="custom-control-input" id="sign-in-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="sign-in-remember">Remember me next time</label>
                          </div>
                        </div>
        
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
        
                      </form>
        
                    </div>
        
                    <div class="text-center text-small mt-3">
                      Don't have an account? <a href="{{ route('register') }}">Sign up here</a>
                    </div>
        
                  </div>
                </div>
              </div>
            </section>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    @includeWhen(Auth::user(), 'layouts._admin_js')
</body>
</html>
